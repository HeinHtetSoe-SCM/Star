export const state = () => ({
    informations: [],
    versions: [],
    models: [],
    colors: [],
    storages: [],
    tradeIns: [],
    tradeInSmartphones: [],
    payments: [],
    selectedSpecs: [],
    tradeInStorages: [],
    price: 0,
});

export const getters = {
    standardModels (state, getters) {
        const selectedVersion = state.selectedSpecs.find(version => version.id === 8);
        if(selectedVersion) {
            return state.models.filter(model => model.id < 12);
        } else {
            return state.models.filter(model => model.id >= 12);
        }
    },
    tradeInTabs (state, getters) {
        const selectedTradeIn = state.selectedSpecs.find(tradeIn => tradeIn.id === 23);
        if(selectedTradeIn) {
            return state.informations;
        } else {
            const computedInformation = state.informations.filter(info => info.id !== 6)
            return computedInformation;
        }
    },
    tradeInSmartphoneStorages (state, getters) {
        const selectedTradeInSmartphone = state.selectedSpecs.find(tradeIn => tradeIn.parent_id === 6);
        if(selectedTradeInSmartphone) {
            return selectedTradeInSmartphone.children;
        }
    },
    checkOut (state, getters) {
        const checkOut = state.selectedSpecs;
        const result = [];

        for(let i = 0; i < checkOut.length; i++) {
            if(checkOut[i].parent_id !== 5){
                result.push({
                    title: state.informations.find(info => info.id === checkOut[i].parent_id).title,
                    description: checkOut[i].title,
                    parent_id: checkOut[i].parent_id
                });
            }
        }

        return result;
    }
}

export const actions = {
    fetchSpecs (context) {
        this.$axios
            .get('/api/starphone')
            .then(response => {
                context.commit('SET_INFORMATIONS', response.data);
                context.commit('SET_VERSIONS', response.data[0].children);
                context.commit('SET_MODELS', response.data[1].children);
                context.commit('SET_COLORS', response.data[2].children);
                context.commit('SET_STORAGES', response.data[3].children);
                context.commit('SET_TRADE_INS', response.data[4].children);
                context.commit('SET_TRADE_IN_SMARTPHONES', response.data[5].children);
                context.commit('SET_PAYMENTS', response.data[6].children);
            });
    },

    pushSpec ( context, spec ) {
        const check = context.state.selectedSpecs.find(
            selectedSpec => selectedSpec.parent_id === spec.parent_id
        );
        if(check) {
            if(check.id === 23 ) {
                if(context.state.tradeInStorages.length > 0) {
                    if(context.state.selectedSpecs.find(
                        selectedSpec => selectedSpec.parent_id === 6
                    )){
                        context.commit('ADD_PRICE', context.state.tradeInStorages[0].price);
                        context.commit('REMOVE_SPEC', context.state.selectedSpecs.find(
                            selectedSpec => selectedSpec.parent_id === 6
                        ));
                        context.commit('REMOVE_STORAGE', context.state.tradeInStorages[0]);
                    }
                }
            }

            context.commit('REMOVE_SPEC', check);
            context.commit('ADD_SPEC', spec);

            if(check.price != null && spec.price != null) {
                context.commit('REDUCE_PRICE', check.price);
                context.commit('ADD_PRICE', spec.price);
            }
        } else {
            context.commit('ADD_SPEC', spec);
            if(spec.price != null) {
                context.commit('ADD_PRICE', spec.price);
            }
        }
    },

    tradeInDiscount ( context, spec ) {
        if(context.state.tradeInStorages.length > 0) {
            const old = context.state.tradeInStorages[0];
            context.commit('REMOVE_STORAGE', old);
            context.commit('ADD_STORAGE', spec);

            if(old.price != null && spec.price != null) {
                context.commit('ADD_PRICE', old.price);
                context.commit('REDUCE_PRICE', spec.price);
            }
        } else {
            context.commit('ADD_STORAGE', spec);
            if(spec.price != null) {
                context.commit('REDUCE_PRICE', spec.price);
            }
        }
    }
}

export const mutations = {
    SET_INFORMATIONS(state, informations) {
        state.informations = informations;
    },
    SET_VERSIONS(state, versions) {
        state.versions = versions;
    },
    SET_MODELS(state, models) {
        state.models = models;
    },
    SET_COLORS(state, colors) {
        state.colors = colors;
    },
    SET_STORAGES(state, storages) {
        state.storages = storages;
    },
    SET_TRADE_INS(state, tradeIns) {
        state.tradeIns = tradeIns;
    },
    SET_TRADE_IN_SMARTPHONES(state, tradeInSmartphones) {
        state.tradeInSmartphones = tradeInSmartphones;
    },
    SET_PAYMENTS(state, payments) {
        state.payments = payments;
    },
    ADD_PRICE(state, price) {
        state.price += price;
    },
    ADD_SPEC(state, spec) {
        state.selectedSpecs.push(spec);
    },
    ADD_STORAGE(state, storage) {
        state.tradeInStorages.push(storage);
    },
    REMOVE_STORAGE(state, storage) {
        state.tradeInStorages.splice(state.tradeInStorages.indexOf(storage), 1);
    },
    REMOVE_SPEC(state, spec) {
        state.selectedSpecs.splice(state.selectedSpecs.indexOf(spec), 1);
    },
    REDUCE_PRICE(state, price) {
        state.price -= price;
    },
}