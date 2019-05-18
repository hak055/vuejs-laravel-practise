@extends('layouts.app')

@section('content')

                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" 
                        required v-model="newItem.name" placeholder=" Enter some name">
                </div>
                <div class="form-group">
                    <label for="age">Age:</label>
                    <input type="number" class="form-control" id="age" name="age" 
                        required v-model="newItem.age" placeholder=" Enter your age">
                </div>
                <div class="form-group">
                    <label for="profession">Profession:</label>
                    <input type="text" class="form-control" id="profession" name="profession"
                        required v-model="newItem.profession" placeholder=" Enter your profession">
                </div>

                <button class="btn btn-primary" @click.prevent="createItem()" id="name" name="name">
                    <span class="glyphicon glyphicon-plus"></span> ADD
                </button>


@endsection