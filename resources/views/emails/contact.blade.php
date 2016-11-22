<h1>Contato do Site</h1>

<strong>Nome:</strong> {{$request->get('name')}}</br>
<strong>Email:</strong> {{$request->get('email')}}</br>
<blockquote>
	<p>{{$request->get('message')}}</p>
</blockquote></br>
Enviado em <strong>{!!date("Y-m-d H:i:s")!!} por {!!$_SERVER['REMOTE_ADDR']!!}</strong>