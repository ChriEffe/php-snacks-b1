const App = new Vue(
    {
        el: '#app',
        data: {
            cars: [],
            filteredCar: [],
            search: '',
        },
        created() {
            axios.get('http://localhost/php-snacks-b1/server/controller-api.php').then((result) => {
                this.cars = result.data.results;
                this.filteredCar = result.data.results;
            }).catch((error) => { console.log(error); });
        },
        methods: {
            filter() {
                if (this.search == '') {
                    this.cars = this.filteredCar;
                } else {
                    this.cars = [];
                    this.filteredCar.forEach(element => {
                        if (element.colore == this.search || element.marca == this.search) {
                            this.cars.push(element);
                        }
                    });
                }
            },
        }
    }
);