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
    price: 0,
});

export const getters = {
    tradeInSmartphones (state, getters) {
        
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
        const check = context.state.selectedSpecs.find(selectedSpec => selectedSpec.parent_id === spec.parent_id);
        if(check) {
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
    REDUCE_PRICE(state, price) {
        state.price -= price;
    },
    ADD_SPEC(state, spec) {
        state.selectedSpecs.push(spec);
    },
    REMOVE_SPEC(state, spec) {
        state.selectedSpecs.splice(state.selectedSpecs.indexOf(spec), 1);
    }
}