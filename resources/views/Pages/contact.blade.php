@extends('main')
@section('title','| Contact')
@section('content')
                



                <div class="row">
                        <div class="col-md-12">
                            <h1>Contact me!!</h1>

                            <hr>
                            <form>
                                <div class="form-grup">
                                    <label name="email">Email</label>
                                    <input id="email" name="email" class="form-control">
                                </div>

                                <div class="form-grup">
                                    <label name="subject">Subject:</label>
                                    <input id="subject" name="subject" class="form-control">
                                </div>

                                <div class="form-grup">
                                    <label name="message">Message</label>
                                    <textarea id="message" name="message" class="form-control ">
                                   
                                    </textarea>
                                </div>
                                <br>

                                <input type="submit" value="Send message" class="btn btn-success">
                            </form>
                        </div>
                    </div>
                </div>

               
@endsection








