<template>
    <el-form
        :model="form"
        status-icon
        :rules="rules"
        ref="form"
        label-width="100px"
    >
        <el-form-item
            v-for="(input, index) in rules"
            :key="index"
            :label="input.name"
            :prop="index"
        >
            <el-input v-model="form[index]" autocomplete="off"></el-input>
        </el-form-item>
        <el-form-item>
            <el-button
                style="background-color: #409eff"
                type="primary"
                @click="submitForm('form')"
                >Search</el-button
            >
            <el-button @click="resetForm('form')">Reset</el-button>
        </el-form-item>
    </el-form>
</template>

<script>
export default {
    data() {
        const isNumber = (rule, value, callback) => {
            let number = Number.parseFloat(value);
            if (!Number.isInteger(number) && value != "") {
                callback(new Error("Please input digits"));
            } else {
                callback();
            }
        };
        return {
            form: {
                name: "",
                bedrooms: "",
                bathrooms: "",
                storeys: "",
                garages: "",
                price_start: "",
                price_end: "",
            },
            rules: {
                name: { trigger: "blur", name: "Name" },
                bedrooms: {
                    validator: isNumber,
                    trigger: "blur",
                    name: "Bedrooms",
                },
                bathrooms: {
                    validator: isNumber,
                    trigger: "blur",
                    name: "Bathrooms",
                },
                storeys: {
                    validator: isNumber,
                    trigger: "blur",
                    name: "Storeys",
                },
                garages: {
                    validator: isNumber,
                    trigger: "blur",
                    name: "Garages",
                },
                price_start: {
                    validator: isNumber,
                    trigger: "blur",
                    name: "Price min",
                },
                price_end: {
                    validator: isNumber,
                    trigger: "blur",
                    name: "Price max",
                },
            },
        };
    },
    methods: {
        submitForm(formName) {
            this.$refs[formName].validate((valid) => {
                if (valid) {
                    this.$root.$emit("search", this.form);
                } else {
                    console.log("error submit!!");
                    return false;
                }
            });
        },
        resetForm(formName) {
            this.$refs[formName].resetFields();
        },
    },
};
</script>