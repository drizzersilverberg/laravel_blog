@component('mail::message')

# Welcome!

## Thanks so much for registering

@component('mail::button', ['url' => 'https://blog.drizzersilverberg.com'])
Start Browsing
@endcomponent

@component('mail::panel', ['url' => ''])
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
