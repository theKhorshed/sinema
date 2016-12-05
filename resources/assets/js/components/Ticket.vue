<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Book Ticket</h3></div>

                    <div class="panel-body">
                        <div class="form-group">
                          <label for="movie">Select Movie: </label>

                          <select id="movie" class="form-control" v-model="movie">
                            <option v-for="movie in movies" v-bind:value="movie.id">
                                {{movie.title}}
                            </option>
                          </select>
                        </div>

                        <div class="form-group">
                          <label for="show_time">Choose Show Time: </label>

                          <select id="show_time" class="form-control" v-model="show_time">
                            <option value="0" disabled="true">Select</option>

                            <option v-for="show in shows" v-bind:value="show.id">
                                {{show.hall.title}} - {{show.show.title}} - {{show.show.time}}
                            </option>
                          </select>
                        </div>

                        <div class="form-group">
                          <label for="seat">Choose Seat (Max 4): </label>

                          <select id="seat" class="form-control" v-model="seat">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                          </select>
                        </div>

                        <div class="form-group">
                          <label for="date">Choose Date): </label>
                          <input type="date" name="date" id="date" v-model="date">
                        </div>

                        <div class="price"><h4>Price: ${{seat * 10}}</h4></div>

                        <button class="btn btn-success" @click="bookTicket">Conrifm</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.');
            this.movies = JSON.parse(this.alldata);
        },

        data(){
            return {
                movies : {},
                movie: 0,
                show_time: 0,
                seat: 0,
                date: '',
                bookData: {}
            }
        },

        computed: {
            shows(){
                if ( this.movie ) {
                    var elementPos = this.movies.map(function(x) {return x.id; }).indexOf(this.movie);
                    return this.movies[elementPos].showed_on;
                }
                return {}
            },

            bookData(){
                return {
                    movie: this.movie,
                    show : this.show_time,
                    seat : this.seat,
                    date : this.date,
                    price : this.seat * 10,
                }
            }
        },

        methods: {
            bookTicket(){
              this.$http.post('/bookings', this.bookData).then((response) => {
                console.log(response.body);
              }, (response) => {
                console.log('an error occured');
              });
            }
        },

        props: ['alldata']
    }
</script>
