<template>
    <div>
        <form @submit="formSubmit">

        <button v-if="show" type="submit" class="btn btn-info" style="width: 100%;">Demander le Poste</button>

        <div v-else class="alert alert-success">
            Votre Demande a été envoyé avec succès
        </div>
        </form>
        
    </div>
</template>

<script>
    export default {
        props:["jobid"],
        mounted() {
            console.log('Component mounted.')
        },
        data(){
            return{
                'show':true
            }
        },
        methods:{
            formSubmit(e){
                e.preventDefault();
                axios.post('/applications/'+ this.jobid,{

                }).then((response)=>{
                    this.show=false

                }).catch((error)=>{
                    alert('error')
                });
            }
        }
    }
</script>
