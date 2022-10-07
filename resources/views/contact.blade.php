@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1>Contacta con nosotros</h1>
                <h2>Deje su mensaje y nos comunicaremos con usted a la brevedad</h2>
                <form>
                    <div class="mb-3">
                        <label for="clientName" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="clientName" name='clientName'
                            aria-describedby="clientNameHelp">
                        <div id="clientNameHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="clientEmail" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="clientEmail"
                            name='clientEmail'aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="clientPhone" class="form-label">Teléfono</label>
                        <input type="text" class="form-control" id="clientPhone"
                            name='clientPhone'aria-describedby="clientPhoneHelp">
                        <div id="clientPhoneHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3 form-floating">

                        <textarea class="form-control" placeholder="Leave a comment here" id="clientComment"name="clientComment"
                            style='min-height:150px' aria-describedby="clientCommentHelp"></textarea>
                        <label for="floatingTextarea">Comments</label>
                        <div id="clientCommentHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-md-6">
                @include('partials.contactData')
            </div>
        </div>
    @endsection
