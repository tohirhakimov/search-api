<template>
    <el-table
        v-loading="loading"
        :data="tableData"
        class="w-100 rounded"
        element-loading-text="Loading..."
        element-loading-spinner="el-icon-loading"
        empty-text='No data'
        stripe
        height="550"
    >
        <el-table-column prop="name" label="Name" width="180">
        </el-table-column>
        <el-table-column prop="price" label="Price" width="180">
        </el-table-column>
        <el-table-column prop="bedrooms" label="Bedrooms"> </el-table-column>
        <el-table-column prop="bathrooms" label="Bathrooms"> </el-table-column>
        <el-table-column prop="storeys" label="Storeys"> </el-table-column>
        <el-table-column prop="garages" label="Garages"> </el-table-column>
    </el-table>
</template>

<script>
export default {
    props: {
        tableData: [],
        loading: false,
    },
};
</script>