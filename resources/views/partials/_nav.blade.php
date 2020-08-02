<nav class="nav">
    <div class="nav__wrapper">
        <div class="nav__brand"><a href="{{ url('/') }}">{{ config('app.name') }}</a></div>
        <div class="nav__navicon"></div>
        <div class="nav__links__wrapper nav__links--right">
            <ul class="nav__links">
                <li class="nav__links__item md-mr-3 {{ active_link('/') }}"><a href="{{ url('/') }}">{{ __('Welcome') }}</a></li>
                @guest
                    <li class="nav__links__item md-mr-3 {{ active_link('login') }}"><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
                    <li class="nav__links__item md-mr-3 {{ active_link('register') }}"><a href="{{ route('register') }}">{{ __('Register') }}</a></li>

                @else
                    <li class="nav__links__item nav__links__item--dropdown">
                        <a href="#">{{ Auth::user()->name }}</a>
                        <ul class="nav__links">
                            <li class="nav__links__item"><a href="{{ route('apitokens.index') }}">{{ __('Api Tokens') }}</a></li>

                            <li class="nav__links__item"><a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a></li>
                        </ul>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>

                @endguest
            </ul>
        </div>
    </div>
</nav>
