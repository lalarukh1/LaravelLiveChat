@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel live-chat">

                <div class="panel-heading" id="live-chat">
                    <h4 class="panel-title">  <a data-toggle="collapse"  data-parent="#live-chat" href="#chat-window"> Live Chat
                            <p class="glyphicon glyphicon-minus" style="float:right"></p></a>
                         </h4>
                </div>

                <div id="chat-window" class="appear">
                    <div class="panel-body">

                            @guest
                            @if(count($errors) == 0)
                                <p class="alert alert-info animated bounceInDown" role="alert" > Hey! Please login or register quickly if you want to chat :) </p>
                            @endif

                                <div class="buttons btn-group" data-toggle="buttons">
                                    <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#login">
                                        Login
                                    </button>
                                    <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#register">
                                        Register
                                    </button>
                                </div>

                            @else

                                    <div>
                                        <button class="btn btn-warning btn-xs logout" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </button>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>

                            <chat-messages  :messages="messages" :user="{{ Auth::user() }}"></chat-messages>
                        </div>

                    <div class="panel-footer">
                            <chat-form v-on:messagesent="addMessage" :user="{{ Auth::user() }}"></chat-form>
                    </div>

                    @endguest

                    @if(count($errors) == 0)
                     <div id="login" class="collapse">
                                @include ('auth.login')
                            </div>

                            <div id="register" class="collapse">
                                @include ('auth.register')
                      </div>

                      @else

                        <div id="login" class="appear">
                            @include ('auth.login')
                        </div>

                        <div id="register" class="appear">
                            @include ('auth.register')
                        </div>

                    @endif


            </div>
                </div>

                </div>

            </div>
        </div>
    </div>

    <script>
        window.setTimeout(function () {
            $(".alert-info").fadeTo(500, 0).slideUp(500, function () {
                $(this).remove();
            });
        }, 3000);
    </script>


@endsection