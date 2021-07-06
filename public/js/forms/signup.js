const myApp = {
    data() {
        return {
            name: 'aaa',
            email: 'aaa',
            password: 'aaa',
            telefone: 'aaa'
        }
    },

    methods: {
        signup() {
            let erros = 0;
            if(this.name == '') {
                $('#txt-name').addClass('is-invalid');
            } else {
                $('#txt-name').remove('is-invalid');
                erros--;
            }

            if(this.email == '') {
                $('#txt-email').addClass('is-invalid');
                erros++;
            } else {
                $('#txt-email').remove('is-invalid');
                erros--;
            }

            if(this.password == '') {
                $('#txt-password').addClass('is-invalid');
                erros++;
            } else {
                $('#txt-password').remove('is-invalid');
                erros--;
            }

            if(erros > 0) {
                $('#signup-erro').removeClass('d-none');
                return;
            }

            dados = [
                this.name,
                this.email,
                this.password,
                this.telefone
            ];
            $.ajax({
                type: 'POST',
                url: `${base_url}/index.php?a=signup`,
                data: {
                    name: this.name,
                    email: this.email,
                    passwd: this.password,
                    telefone: this.telefone
                },
                success: (response) => {
                    if(response) {
                        // r = JSON.parse(response);
                        console.log(response);
                    }
                },
                error: (e) => {
                    console.log(e);
                }
            });
        }
    }
}

const app = Vue.createApp(myApp);
app.mount('#form-signup');