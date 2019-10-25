function display(form)
{
	if (form.nomeUser.value=="Rodrigo")
	{
		if (form.senhaUser.value=="123")
		{
			window.open('html/email.html')
		}
		else
		{
			alert("senha invalida")
		}
	}
		else
		{
			alert("nome de usuario invalido")
		}
}