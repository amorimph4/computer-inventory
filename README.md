# products-import

### começando
    rode o comando composer install para instalar as dependencias 

### configuração
    em seu arquivo .env mude as configurações de banco de dados para o seu banco.  
    para criar as tabelas necessarias em seu banco rode o comando php artisan migrate.  
    para acessar as rotas da API é necessário que você rode o comando php artisan db:seed isso irá criar um usuário em seu banco de dados com o email :importfile@gmail.com e a senha:123456.  
    
### routes API
	/api/login  
	Method - POST  
	Header - Content-Type:application/json, Accept:application/json               
	Body - email: importfile@gmail.com , password: 123456  
	Response - Token
	Obs : token é expirado a cada 1 hora. guarde este token para realizar suas requests

    /api/all-computers    
    Method - GET  
	Header - Content-Type:application/json, Accept:application/json, Authorization:Bearer yourToken                  
	Response - Computadores cadastrados.
	Obs: retorna a lista de todos os computadores cadastrados.
    
    /api/computer/{computer}  
    Method - GET  
	Header - Content-Type:application/json, Accept:application/json, Authorization:Bearer yourToken                  
	Response - Computador cadastrado.
	Obs: retorna o registro do computador especificado pelo id.
    
    /api/import  
    Method - POST  
	Header - Content-Type:application/json, Accept:application/json, Authorization:Bearer yourToken               
	Body - fileImport:file  
	Response - mensagem de sucess ou error.  
	Obs: importa a planilha para base de dados (em sua request coloque o arquivo a ser importado no campo fileImport).
    
    /api/create-computer  
    Method - POST  
	Header - Content-Type:application/json, Accept:application/json, Authorization:Bearer yourToken                
	Body - name:"ex", launch_year:"ex", manufacturer:"ex", operational_system:"ex", cpu:"ex", memory:"ex", storage:"ex", initial_price:"ex", image:"ex", comments:"ex"  
	Response - mensagem de sucess ou error.  
	Obs: Cria um novo computador na base de dados, todos os campos são obrigatórios exceto comments  

    /api/update-computer/{computer}  
    Method - POST  
	Header - Content-Type:application/json, Accept:application/json, Authorization:Bearer yourToken                
	Body - name:"ex", launch_year:"ex", manufacturer:"ex", operational_system:"ex", cpu:"ex", memory:"ex", storage:"ex", initial_price:"ex", image:"ex", comments:"ex"  
	Response - mensagem de sucess ou error.  
	Obs: altera um produto especificado pelo id e pelos campos enviados.  
    
    /api/delete-computer/{computer}  
    Method - POST  
	Header - Content-Type:application/json, Accept:application/json, Authorization:Bearer yourToken  
	Response - mensagem de sucess ou error.  
	Obs: deleta um produto especificado pelo id.
