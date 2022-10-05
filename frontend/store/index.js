export const state = () => ({
    versions: [],
    models: [],
    colors: [],
    storages: [],
    tradeIns: [],
    tradeInSmartphones: [],
    payments: [],
});

export const mutations = {
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
}