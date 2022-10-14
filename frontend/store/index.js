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

    /**
     * Show Models
     * @param {*} state 
     * @param {*} getters 
     * @returns 
     */
    standardModels (state, getters) {
        const standardVersionId = 8;
        const proModelId = 12;
        const selectedVersion = state.selectedSpecs.find(version => version.id === standardVersionId);
        if(selectedVersion) {
            return state.models.filter(model => model.id < proModelId);
        } else {
            return state.models.filter(model => model.id >= proModelId);
        }
    },

    /**
     * Show tabs
     * @param {*} state 
     * @param {*} getters 
     * @returns 
     */
    tradeInTabs (state, getters) {
        const yesTradeInId = 23;
        const tradeInSmartphoneId = 6;
        const selectedTradeIn = state.selectedSpecs.find(tradeIn => tradeIn.id === yesTradeInId);
        if(selectedTradeIn) {
            return state.informations;
        } else {
            return state.informations.filter(info => info.id !== tradeInSmartphoneId);
        }
    },

    /**
     * Show trade in smartphone storages
     * @param {*} state 
     * @param {*} getters 
     * @returns 
     */
    tradeInSmartphoneStorages (state, getters) {
        const tradeInSmartphoneId = 6;
        const selectedTradeInSmartphone = state.selectedSpecs.find(tradeIn => tradeIn.parent_id === tradeInSmartphoneId);
        if(selectedTradeInSmartphone) {
            return selectedTradeInSmartphone.children;
        }
    },

    /**
     * Show selected Specifications for checkout 
     * @param {*} state 
     * @param {*} getters 
     * @returns 
     */
    checkOut (state, getters) {
        const checkOut = state.selectedSpecs;
        const result = [];
        const tradeInId = 5;
        for(let i = 0; i < checkOut.length; i++) {
            if(checkOut[i].parent_id !== tradeInId){
                result.push({
                    title: state.informations.find(info => info.id === checkOut[i].parent_id).title,
                    description: checkOut[i].title,
                    parent_id: checkOut[i].parent_id
                });
            }
        }
        return result;
    },

    /**
     * Show selected specifications for specifications/_id
     * @param {*} state 
     * @param {*} getters 
     * @returns 
     */
    checkOutCard (state, getters) {
        const checkOut = state.selectedSpecs;
        return checkOut.map(check => {
            return {
                title: state.informations.find(info => info.id === check.parent_id).title,
                description: check.title,
                parent_id: check.parent_id
            }
        })
    }
}

export const actions = {

    /**
     * Fetching the data from API and adding it to related arrays
     * @param {*} context 
     */
    fetchSpecs (context) {
        const versionIndex = 0;
        const modelIndex = 1;
        const colorIndex = 2;
        const storageIndex = 3;
        const tradeInIndex = 4;
        const tradeInSmartPhoneIndex = 5;
        const paymentIndex = 6;
        this.$axios
            .get('/api/starphone')
            .then(response => {
                context.commit('SET_INFORMATIONS', response.data);
                context.commit('SET_VERSIONS', response.data[versionIndex].children);
                context.commit('SET_MODELS', response.data[modelIndex].children);
                context.commit('SET_COLORS', response.data[colorIndex].children);
                context.commit('SET_STORAGES', response.data[storageIndex].children);
                context.commit('SET_TRADE_INS', response.data[tradeInIndex].children);
                context.commit('SET_TRADE_IN_SMARTPHONES', response.data[tradeInSmartPhoneIndex].children);
                context.commit('SET_PAYMENTS', response.data[paymentIndex].children);
            });
    },

    /**
     * add selected specifications to selectedSpec array and update the price
     * @param {*} context 
     * @param {*} spec 
     */
    pushSpec ( context, spec ) {
        const yesTradeInId = 23;
        const tradeInSmartPhoneId = 6;
        const check = context.state.selectedSpecs.find(
            selectedSpec => selectedSpec.parent_id === spec.parent_id
        );
        if(check) {
            if(check.id === yesTradeInId ) {
                if(context.state.tradeInStorages.length > 0) {
                    if(context.state.selectedSpecs.find(
                        selectedSpec => selectedSpec.parent_id === tradeInSmartPhoneId
                    )){
                        context.commit('ADD_PRICE', context.state.tradeInStorages[0].price);
                        context.commit('REMOVE_SPEC', context.state.selectedSpecs.find(
                            selectedSpec => selectedSpec.parent_id === tradeInSmartPhoneId
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

    /**
     * add selected trade in smartphone storage to tradeInStorage and update the price 
     * @param {*} context 
     * @param {*} spec 
     */
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