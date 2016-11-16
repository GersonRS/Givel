<template>
    
    <div class="table-responsive">
    <table class="table table-bordered table-striped table-condensed">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="category in categories">
                <td>{{ category.id }}</td>
                <td>{{ category.name }}</td>
                <td>
                <a class="btn btn-default btn-sm" href="#">
                Editar
                </a>{{teste}}
                </td>
            </tr>
        </tbody>
    </table>
    </div>
</template>

<script>
    export default {
        props: ['categories','teste'],

        mounted() {
            console.log('começou')
            console.log(this.teste)
        },

        data() {
            return {
                title: 'a'
            };
        }
    }
</script>
