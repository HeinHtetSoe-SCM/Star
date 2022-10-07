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

    chooseVersion (context, version) {
        const selectedVersion = context.state.versions.find(item => item.id === version.id);

        if(!selectedVersion) {
            context.commit('REMOVE_SPEC', selectedVersion);
        } else {
            context.commit('ADD_SPEC', selectedVersion);
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
        state.price += price
    },
    REDUCE_PRICE(state, price) {
        state.price -= price
    }
}