@component('mail::message')
<h1>Bienvenu {{$user->name}} </h1>

<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam amet autem blanditiis cumque dolorem eaque
    et, eum, harum in iste laboriosam neque provident saepe sunt tempore tenetur vel veritatis.
</div>
<div>Ad aliquid amet asperiores dicta exercitationem fugiat illo in ipsum iusto maiores molestiae nam nesciunt nihil
    nostrum nulla officia omnis, pariatur, perspiciatis porro qui quo quod rem unde, vero voluptatem.
</div>

@component('mail::button', ['url' => 'http://127.0.0.1:8000/login'])
Vous connecter
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
