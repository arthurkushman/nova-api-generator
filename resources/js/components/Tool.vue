<template>
    <div>
        <heading class="mb-6">Api generator template creator</heading>

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
                                <div v-for="param in params" v-html="param">
                                    {{ param }}
                                </div>
                            </div>
                            <div class="field" v-on:click="addParam">
                                <button type="button" class="btn btn-primary">+</button>
                            </div>
                        </div>
                        <div v-for="(entity, index) in entities" :key="index" v-html="entity">
                            {{ entity }}
                        </div>
                        <div class="field" v-on:click="addEntity">
                            <button type="button" class="btn btn-primary">+</button>
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

        },
        data: function() {
            return {params: [], entities: []}
        },
        methods: {
            addParam: function(event) {
                this.params.push(
                    '<div class="field param" ref="param"><span>Parameter: </span><span><input type="text" name="param"/></span></div>')
            },
            addEntity: function() {
                this.entities.push('<div ref="entity"><div class="field entity"><span>Entity name: </span><span><input type="text" name="entity[]"/></span></div><div class="entity_params"><div class="field param" ref="param"><span>Parameter:</span><span><input type="text" name="param"/></span></div><div v-for="param in params" v-html="param">{{ param }}</div></div><div class="field" v-on:click="addParam"><button type="button" class="btn btn-primary">+</button></div></div>')
                this.$forceUpdate()
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

    .btn {
        padding: 5px 10px;
        border-radius: 3px;
    }
</style>
