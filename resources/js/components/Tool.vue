<template>
    <div>
        <heading class="mb-6">Nova Api Generator</heading>

        <card class="bg-90 flex flex-col items-center justify-center" style="min-height: 300px">
            <form action="/nova-vendor/nova-api-generator/create" method="post">
                <div class="container">
                    <div class="fields_container">
                        <div ref="entity">
                            <div class="field entity">
                                <span>
                                    Entity name:
                                </span>
                                <span>
                                    <input type="text" name="entity[]"/>
                                </span>
                            </div>
                            <div class="entity_params">
                                <div class="field param" ref="param">
                                    <span>
                                        Parameter:
                                    </span>
                                    <span>
                                        <input type="text" name="param"/>
                                    </span>
                                </div>
                            </div>
                            <div class="field" v-on:click="addParam">
                                <button type="button" class="btn btn-primary">Add parameter</button>
                            </div>
                        </div>
                    </div>
                    <div>
                        <input type="submit" value="Save"/>
                    </div>
                </div>
            </form>
        </card>
    </div>
</template>

<script>
    export default {
        mounted() {
            let entity = this.$refs.entity;
            let param = this.$refs.param;
            // console.log()

            // $.ajaxSetup({
            //     headers: {
            //         'X-CSRF-Token': $('meta[name="csrf_token"]').attr('content')
            //     }
            // });
        },
        methods: {
            addParam: function(event) {
                console.log(123);
            }
        }
    }
</script>

<style>
    /* Scoped Styles */
    .field {
        margin: 20px;
        color: #fff;
    }
    .fields_container {
        border: #1b4b72 1px solid;
    }
    .entity_params {
        border: #2a9055 1px solid;
    }
</style>
