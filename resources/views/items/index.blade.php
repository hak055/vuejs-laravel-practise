@extends('layouts.app')

@section('content')

 <div class="content">
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



                <div class="container">
                    <div class="table table-borderless" id="table">
                        <table class="table table-borderless" id="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Age</th>
                                    <th>Profession</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tr v-for="item in items">
                                <td>@{{ item.id }}</td>
                                <td>@{{ item.name }}</td>
                                <td>@{{ item.age }}</td>
                                <td>@{{ item.profession }}</td>

                                <td id="show-modal" @click="showModal=true; setVal(item.id, item.name, item.age, item.profession)"  class="btn btn-info" ><span
                            class="glyphicon glyphicon-pencil"></span></td>
                            <td @click.prevent="deleteItem(item)" class="btn btn-danger"><span
                                class="glyphicon glyphicon-trash"></span></td>
                                
                            </tr>
                        </table>
                    </div>
                </div>



                <modal v-if="showModal" @close="showModal=false">
                    <h3 slot="header">Edit Item</h3>
                    <div slot="body">
                        
                        <input type="hidden" disabled class="form-control" id="e_id" name="id"
                                required  :value="this.e_id">
                        Name: <input type="text" class="form-control" id="e_name" name="name"
                                required  :value="this.e_name">
                        Age: <input type="number" class="form-control" id="e_age" name="age"
                        required  :value="this.e_age">
                        Profession: <input type="text" class="form-control" id="e_profession" name="profession"
                        required  :value="this.e_profession">
                        
                      
                    </div>
                    <div slot="footer">
                        <button class="btn btn-default" @click="showModal = false">
                        Cancel
                      </button>
                      
                      <button class="btn btn-info" @click="editItem()">
                        Update
                      </button>
                    </div>
                </modal>
            </div>
            

@endsection