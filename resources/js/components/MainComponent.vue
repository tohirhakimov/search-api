<template>
    <div class="container mx-auto p-20 rounded">
        <my-search class="w-3/4 container mx-auto"></my-search>
        <my-table :tableData="table_data" :loading="loading"></my-table>
    </div>
</template>

<script>
import MyTable from "./ui/TableComponent.vue";
import MySearch from "./ui/SearchComponent.vue";
import axios from "axios";
export default {
    components: { MyTable, MySearch },
    data() {
        return {
            table_data: [],
            loading: false,
        };
    },
    created() {
        this.$root.$on("search", this.searchListener);
        this.getData();
    },
    destroyed() {
        this.$root.$off("search", this.searchListener);
    },
    methods: {
        searchListener(params) {
            this.getData(params);
        },
        getData(params = {}) {
            this.loading = true;
            params = _.flow([
                Object.entries,
                (arr) => arr.filter(([key, value]) => value != ""),
                Object.fromEntries,
            ])(params);
            axios
                .get("/api/house", { params })
                .then((res) => {
                    this.table_data = res.data.data;
                    if (!this.table_data.length) {
                        this.$message({
                            message: "No records found",
                            type: "warning",
                        });
                    }
                })
                .finally(() => (this.loading = false));
        },
    },
};
</script>
