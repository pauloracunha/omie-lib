<?php

namespace OmieLib\Geral\Clientes;

use OmieLib\Common\OmieFail;

/**
 * Cadastro reduzido de produtos
 *
 * @pw_element integer $codigo_cliente_omie Código de Cliente / Fornecedor
 * @pw_element string $codigo_cliente_integracao Código de Integração com sistemas legados.
 * @pw_element string $razao_social Razão Social<BR>Preenchimento Obrigatório.
 * @pw_element string $cnpj_cpf CNPJ / CPF<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.
 * @pw_element string $nome_fantasia Nome Fantasia<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.
 * @pw_element string $telefone1_ddd DDD Telefone<BR>Preenchimento Opcional.
 * @pw_element string $telefone1_numero Telefone para Contato<BR>Preenchimento Opcional.
 * @pw_element string $contato Nome para contato<BR>Preenchimento Opcional.<BR><BR>DEPRECATED para a estrutura "clientesFiltrar".
 * @pw_element string $endereco Endereço<BR>Preenchimento Opcional.<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.<BR><BR>Informação localizada na Aba "Endereço" do cadastro do Cliente.<BR><BR>DEPRECATED para a estrutura "clientesFiltrar".
 * @pw_element string $endereco_numero Número do Endereço<BR>Preenchimento Opcional.<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.<BR><BR>Informação localizada na Aba "Endereço" do cadastro do Cliente.
 * @pw_element string $bairro Bairro<BR>Preenchimento Opcional.<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.<BR><BR>Informação localizada na Aba "Endereço" do cadastro do Cliente.<BR><BR>DEPRECATED para a estrutura "clientesFiltrar".
 * @pw_element string $complemento Complemento para o Número do Endereço<BR>Preenchimento Opcional.<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.<BR><BR>Informação localizada na Aba "Endereço" do cadastro do Cliente.
 * @pw_element string $estado Sigla do Estado<BR>Preenchimento Opcional.<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.<BR><BR>Informação localizada na Aba "Endereço" do cadastro do Cliente.<BR><BR>Utilize a tag "cSigla" do método "ListarEstados" da API<BR>http://app.omie.com.br/api/v1/geral/estados/<BR>para obter essa informação.<BR><BR>DEPRECATED para a estrutura "clientesFiltro".
 * @pw_element string $cidade Código da Cidade<BR>Recebe o código ibge ou o nome da cidade.<BR><BR>Preenchimento Opcional caso seja enviado o codigo IBGE no campo "cidade_ibge"<BR><BR>Informação localizada na Aba "Endereço" do cadastro do Cliente.<BR><BR>Utilize a tag "nCodIBGE" do método "PesquisarCidades" da API<BR>/api/v1/geral/cidades/<BR>para obter essa informação.<BR><BR>Utilize a tag "cCod" do método "PesquisarCidades" da API<BR>/api/v1/geral/cidades/<BR>para obter essa informação.<BR><BR>DEPRECATED para a estrutura "clientesFiltrar".
 * @pw_element string $cep CEP<BR>Preenchimento Opcional.<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.<BR><BR>Informação localizada na Aba "Endereço" do cadastro do Cliente.<BR><BR>DEPRECATED para a estrutura "clientesFiltrar".
 * @pw_element string $codigo_pais Código do País<BR>Preenchimento Opcional.<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.<BR><BR>Informação localizada na Aba "Endereço" do cadastro do Cliente.<BR><BR>Utilize as tags "cCodigo","cDescricao" ou "cCodigoISO" do método "ListarPaises" da API<BR>http://app.omie.com.br/api/v1/geral/paises/<BR>para obter essa informação.
 * @pw_element string $separar_endereco Separar endereço. <BR>Valores possível S ou N, sendo N o padrão.<BR>Quando igual S separa do endereço o número o e complemento, caso existirem.
 * @pw_element string $pesquisar_cep Pesquisar CEP.<BR>Valores possível S ou N, sendo N o padrão.<BR><BR>Quando igual a S o sistema irá preencher os campos do endereço que estiverem vazios (logradouro, bairro e cidade) conforme os dados do CEP
 * @pw_element string $telefone2_ddd DDD Telefone 2<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Telefones e E-mail" do cadastro do Cliente.
 * @pw_element string $telefone2_numero Telefone 2<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Telefones e E-mail" do cadastro do Cliente.
 * @pw_element string $fax_ddd DDD Fax<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Telefones e E-mail" do cadastro do Cliente.
 * @pw_element string $fax_numero Fax<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Telefones e E-mail" do cadastro do Cliente.
 * @pw_element string $email E-Mail<BR>Preenchimento Opcional.<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.<BR><BR>Informação localizada na Aba "Telefones e E-mail" do cadastro do Cliente.<BR><BR>DEPRECATED para a estrutura "clientesFiltrar".
 * @pw_element string $homepage WebSite<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Telefones e E-mail" do cadastro do Cliente.<BR><BR>DEPRECATED para a estrutura "clientesFiltrar".
 * @pw_element string $inscricao_estadual Inscrição Estadual<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Inscrições CNAE e Outros" do cadastro do Cliente.<BR><BR>DEPRECATED para a estrutura "clientesFiltrar".
 * @pw_element string $inscricao_municipal Inscrição Municipal<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Inscrições CNAE e Outros" do cadastro do Cliente.<BR><BR>DEPRECATED para a estrutura "clientesFiltrar".
 * @pw_element string $inscricao_suframa Inscrição Suframa<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Inscrições CNAE e Outros" do cadastro do Cliente.<BR><BR>DEPRECATED para a estrutura "clientesFiltrar".
 * @pw_element string $optante_simples_nacional Indica se o Cliente / Fornecedor é Optante do Simples Nacional <BR>Preenchimento Opcional.<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.<BR><BR>Informar "S" ou "N".<BR><BR>Informação localizada na Aba "Inscrições CNAE e Outros" do cadastro do Cliente.<BR><BR>DEPRECATED para a estrutura "clientesFiltrar".
 * @pw_element string $tipo_atividade Tipo da Atividade<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Inscrições CNAE e Outros" do cadastro do Cliente.<BR><BR>Utilize a tag "cCodigo" do método "ListarTipoAtiv" da API<BR>http://app.omie.com.br/api/v1/geral/tpativ/<BR>para obter essa informação.
 * @pw_element string $cnae Código do CNAE - Fiscal<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Inscrições CNAE e Outros" do cadastro do Cliente.<BR><BR>Utilize a tag "nCodigo" do método "ListarCNAE" da API<BR>http://app.omie.com.br/api/v1/produtos/cnae/<BR>para obter essa informação.
 * @pw_element string $produtor_rural Indica se o Cliente / Fornecedor é um Produtor Rural<BR>Preenchimento Opcional.<BR><BR>Informar "S" ou "N".<BR><BR>Informação localizada na Aba "Inscrições CNAE e Outros" do cadastro do Cliente.
 * @pw_element string $contribuinte Indica se o cliente é contribuinte (S/N).<BR>Preenchimento Opcional.<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.<BR><BR>Informar "S" ou "N".<BR><BR>Informação localizada na Aba "Inscrições CNAE e Outros" do cadastro do Cliente.
 * @pw_element string $observacao Observações Internas<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Inscrições CNAE e Outros" do cadastro do Cliente.
 * @pw_element string $obs_detalhadas Observações Detalhadas.<BR><BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Inscrições CNAE e Outros" do cadastro do Cliente.
 * @pw_element string $recomendacao_atraso Código da Instrução de Protesto<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Recomendações" do cadastro do Cliente.
 * @pw_element tagsArray $tags Tags do Cliente ou Fornecedor<BR>Preenchimento Opcional.
 * @pw_element string $pessoa_fisica Pessoa Física<BR>Preenchimento automático - Não informar.<BR><BR>Informar "S" ou "N".<BR><BR>DEPRECATED para a estrutura "clientesFiltrar".
 * @pw_element string $exterior Indica que é um tomador de serviço localizado no exterior<BR>Preenchimento automático - Não informar.<BR><BR>Informar "S" ou "N".
 * @pw_element string $logradouro DEPRECATED
 * @pw_element string $importado_api Importado pela API (S/N).
 * @pw_element string $bloqueado DEPRECATED
 * @pw_element string $cidade_ibge Código do IBGE para a Cidade.<BR><BR>Preenchimento Opcional caso seja enviado o nome da cidade no campo "cidade"<BR><BR>Utilize a tag "nCodIBGE" do método "PesquisarCidades" da API<BR>/api/v1/geral/cidades/<BR>para obter essa informação.
 * @pw_element decimal $valor_limite_credito Valor do Limite de Crédito Total.<BR><BR>Preenchimento opcional.
 * @pw_element string $bloquear_faturamento Bloquear o faturamento para o cliente (S/N).<BR><BR>Preenchimento opcional.
 * @pw_element recomendacoes $recomendacoes Recomendações do cliente.
 * @pw_element enderecoEntrega $enderecoEntrega Dados do Endereço de Entrega.
 * @pw_element string $nif NIF - Número de Identificação Fiscal.<BR><BR>Apenas para estrangeiros.
 * @pw_element string $documento_exterior Documento no exterior para clientes estrangeiros.
 * @pw_element string $inativo Indica se o cliente está inativo [S/N]
 * @pw_element dadosBancarios $dadosBancarios Dados Bancários do cliente.
 * @pw_element caracteristicasArray $caracteristicas Características do cliente.
 * @pw_element string $enviar_anexos Enviar anexos por e-mail (S/N).<BR><BR>Valores possíveis S ou N, sendo N o padrão.<BR><BR>Enviar anexos por e-mail além do link para o Portal Omie para o cliente cadastrado.<BR><BR>Esta função só poderá ser utilizada se o Portal Omie estiver ativo.
 * @pw_element info $info Informações sobre o cadastro do cliente.
 * @pw_element string $bloquear_exclusao Bloqueia a exclusão do registro. (S/N)
 * @pw_complex clientes_cadastro
 */
class Clientes_cadastro{
	/**
	 * Código de Cliente / Fornecedor
	 *
	 * @var integer
	 */
	public int $codigo_cliente_omie;
	/**
	 * Código de Integração com sistemas legados.
	 *
	 * @var string
	 */
	public string $codigo_cliente_integracao;
	/**
	 * Razão Social<BR>Preenchimento Obrigatório.
	 *
	 * @var string
	 */
	public string $razao_social;
	/**
	 * CNPJ / CPF<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.
	 *
	 * @var string
	 */
	public string $cnpj_cpf;
	/**
	 * Nome Fantasia<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.
	 *
	 * @var string
	 */
	public string $nome_fantasia;
	/**
	 * DDD Telefone<BR>Preenchimento Opcional.
	 *
	 * @var string
	 */
	public string $telefone1_ddd;
	/**
	 * Telefone para Contato<BR>Preenchimento Opcional.
	 *
	 * @var string
	 */
	public string $telefone1_numero;
	/**
	 * Nome para contato<BR>Preenchimento Opcional.<BR><BR>DEPRECATED para a estrutura "clientesFiltrar".
	 *
	 * @var string
	 */
	public string $contato;
	/**
	 * Endereço<BR>Preenchimento Opcional.<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.<BR><BR>Informação localizada na Aba "Endereço" do cadastro do Cliente.<BR><BR>DEPRECATED para a estrutura "clientesFiltrar".
	 *
	 * @var string
	 */
	public string $endereco;
	/**
	 * Número do Endereço<BR>Preenchimento Opcional.<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.<BR><BR>Informação localizada na Aba "Endereço" do cadastro do Cliente.
	 *
	 * @var string
	 */
	public string $endereco_numero;
	/**
	 * Bairro<BR>Preenchimento Opcional.<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.<BR><BR>Informação localizada na Aba "Endereço" do cadastro do Cliente.<BR><BR>DEPRECATED para a estrutura "clientesFiltrar".
	 *
	 * @var string
	 */
	public string $bairro;
	/**
	 * Complemento para o Número do Endereço<BR>Preenchimento Opcional.<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.<BR><BR>Informação localizada na Aba "Endereço" do cadastro do Cliente.
	 *
	 * @var string
	 */
	public string $complemento;
	/**
	 * Sigla do Estado<BR>Preenchimento Opcional.<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.<BR><BR>Informação localizada na Aba "Endereço" do cadastro do Cliente.<BR><BR>Utilize a tag "cSigla" do método "ListarEstados" da API<BR>http://app.omie.com.br/api/v1/geral/estados/<BR>para obter essa informação.<BR><BR>DEPRECATED para a estrutura "clientesFiltro".
	 *
	 * @var string
	 */
	public string $estado;
	/**
	 * Código da Cidade<BR>Recebe o código ibge ou o nome da cidade.<BR><BR>Preenchimento Opcional caso seja enviado o codigo IBGE no campo "cidade_ibge"<BR><BR>Informação localizada na Aba "Endereço" do cadastro do Cliente.<BR><BR>Utilize a tag "nCodIBGE" do método "PesquisarCidades" da API<BR>/api/v1/geral/cidades/<BR>para obter essa informação.<BR><BR>Utilize a tag "cCod" do método "PesquisarCidades" da API<BR>/api/v1/geral/cidades/<BR>para obter essa informação.<BR><BR>DEPRECATED para a estrutura "clientesFiltrar".
	 *
	 * @var string
	 */
	public string $cidade;
	/**
	 * CEP<BR>Preenchimento Opcional.<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.<BR><BR>Informação localizada na Aba "Endereço" do cadastro do Cliente.<BR><BR>DEPRECATED para a estrutura "clientesFiltrar".
	 *
	 * @var string
	 */
	public string $cep;
	/**
	 * Código do País<BR>Preenchimento Opcional.<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.<BR><BR>Informação localizada na Aba "Endereço" do cadastro do Cliente.<BR><BR>Utilize as tags "cCodigo","cDescricao" ou "cCodigoISO" do método "ListarPaises" da API<BR>http://app.omie.com.br/api/v1/geral/paises/<BR>para obter essa informação.
	 *
	 * @var string
	 */
	public string $codigo_pais;
	/**
	 * Separar endereço. <BR>Valores possível S ou N, sendo N o padrão.<BR>Quando igual S separa do endereço o número o e complemento, caso existirem.
	 *
	 * @var string
	 */
	public string $separar_endereco;
	/**
	 * Pesquisar CEP.<BR>Valores possível S ou N, sendo N o padrão.<BR><BR>Quando igual a S o sistema irá preencher os campos do endereço que estiverem vazios (logradouro, bairro e cidade) conforme os dados do CEP
	 *
	 * @var string
	 */
	public string $pesquisar_cep;
	/**
	 * DDD Telefone 2<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Telefones e E-mail" do cadastro do Cliente.
	 *
	 * @var string
	 */
	public string $telefone2_ddd;
	/**
	 * Telefone 2<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Telefones e E-mail" do cadastro do Cliente.
	 *
	 * @var string
	 */
	public string $telefone2_numero;
	/**
	 * DDD Fax<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Telefones e E-mail" do cadastro do Cliente.
	 *
	 * @var string
	 */
	public string $fax_ddd;
	/**
	 * Fax<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Telefones e E-mail" do cadastro do Cliente.
	 *
	 * @var string
	 */
	public string $fax_numero;
	/**
	 * E-Mail<BR>Preenchimento Opcional.<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.<BR><BR>Informação localizada na Aba "Telefones e E-mail" do cadastro do Cliente.<BR><BR>DEPRECATED para a estrutura "clientesFiltrar".
	 *
	 * @var string
	 */
	public string $email;
	/**
	 * WebSite<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Telefones e E-mail" do cadastro do Cliente.<BR><BR>DEPRECATED para a estrutura "clientesFiltrar".
	 *
	 * @var string
	 */
	public string $homepage;
	/**
	 * Inscrição Estadual<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Inscrições CNAE e Outros" do cadastro do Cliente.<BR><BR>DEPRECATED para a estrutura "clientesFiltrar".
	 *
	 * @var string
	 */
	public string $inscricao_estadual;
	/**
	 * Inscrição Municipal<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Inscrições CNAE e Outros" do cadastro do Cliente.<BR><BR>DEPRECATED para a estrutura "clientesFiltrar".
	 *
	 * @var string
	 */
	public string $inscricao_municipal;
	/**
	 * Inscrição Suframa<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Inscrições CNAE e Outros" do cadastro do Cliente.<BR><BR>DEPRECATED para a estrutura "clientesFiltrar".
	 *
	 * @var string
	 */
	public string $inscricao_suframa;
	/**
	 * Indica se o Cliente / Fornecedor é Optante do Simples Nacional <BR>Preenchimento Opcional.<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.<BR><BR>Informar "S" ou "N".<BR><BR>Informação localizada na Aba "Inscrições CNAE e Outros" do cadastro do Cliente.<BR><BR>DEPRECATED para a estrutura "clientesFiltrar".
	 *
	 * @var string
	 */
	public string $optante_simples_nacional;
	/**
	 * Tipo da Atividade<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Inscrições CNAE e Outros" do cadastro do Cliente.<BR><BR>Utilize a tag "cCodigo" do método "ListarTipoAtiv" da API<BR>http://app.omie.com.br/api/v1/geral/tpativ/<BR>para obter essa informação.
	 *
	 * @var string
	 */
	public string $tipo_atividade;
	/**
	 * Código do CNAE - Fiscal<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Inscrições CNAE e Outros" do cadastro do Cliente.<BR><BR>Utilize a tag "nCodigo" do método "ListarCNAE" da API<BR>http://app.omie.com.br/api/v1/produtos/cnae/<BR>para obter essa informação.
	 *
	 * @var string
	 */
	public string $cnae;
	/**
	 * Indica se o Cliente / Fornecedor é um Produtor Rural<BR>Preenchimento Opcional.<BR><BR>Informar "S" ou "N".<BR><BR>Informação localizada na Aba "Inscrições CNAE e Outros" do cadastro do Cliente.
	 *
	 * @var string
	 */
	public string $produtor_rural;
	/**
	 * Indica se o cliente é contribuinte (S/N).<BR>Preenchimento Opcional.<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.<BR><BR>Informar "S" ou "N".<BR><BR>Informação localizada na Aba "Inscrições CNAE e Outros" do cadastro do Cliente.
	 *
	 * @var string
	 */
	public string $contribuinte;
	/**
	 * Observações Internas<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Inscrições CNAE e Outros" do cadastro do Cliente.
	 *
	 * @var string
	 */
	public string $observacao;
	/**
	 * Observações Detalhadas.<BR><BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Inscrições CNAE e Outros" do cadastro do Cliente.
	 *
	 * @var string
	 */
	public string $obs_detalhadas;
	/**
	 * Código da Instrução de Protesto<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Recomendações" do cadastro do Cliente.
	 *
	 * @var string
	 */
	public string $recomendacao_atraso;
	/**
	 * Tags do Cliente ou Fornecedor<BR>Preenchimento Opcional.
	 *
	 * @var Tags[]
	 */
	public array $tags;
	/**
	 * Pessoa Física<BR>Preenchimento automático - Não informar.<BR><BR>Informar "S" ou "N".<BR><BR>DEPRECATED para a estrutura "clientesFiltrar".
	 *
	 * @var string
	 */
	public string $pessoa_fisica;
	/**
	 * Indica que é um tomador de serviço localizado no exterior<BR>Preenchimento automático - Não informar.<BR><BR>Informar "S" ou "N".
	 *
	 * @var string
	 */
	public string $exterior;
	/**
	 * DEPRECATED
	 *
	 * @var string
	 */
	public string $logradouro;
	/**
	 * Importado pela API (S/N).
	 *
	 * @var string
	 */
	public string $importado_api;
	/**
	 * DEPRECATED
	 *
	 * @var string
	 */
	public string $bloqueado;
	/**
	 * Código do IBGE para a Cidade.<BR><BR>Preenchimento Opcional caso seja enviado o nome da cidade no campo "cidade"<BR><BR>Utilize a tag "nCodIBGE" do método "PesquisarCidades" da API<BR>/api/v1/geral/cidades/<BR>para obter essa informação.
	 *
	 * @var string
	 */
	public string $cidade_ibge;
	/**
	 * Valor do Limite de Crédito Total.<BR><BR>Preenchimento opcional.
	 *
	 * @var decimal
	 */
	public float $valor_limite_credito;
	/**
	 * Bloquear o faturamento para o cliente (S/N).<BR><BR>Preenchimento opcional.
	 *
	 * @var string
	 */
	public string $bloquear_faturamento;
	/**
	 * Recomendações do cliente.
	 *
	 * @var Recomendacoes
	 */
	public Recomendacoes $recomendacoes;
	/**
	 * Dados do Endereço de Entrega.
	 *
	 * @var EnderecoEntrega
	 */
	public EnderecoEntrega $enderecoEntrega;
	/**
	 * NIF - Número de Identificação Fiscal.<BR><BR>Apenas para estrangeiros.
	 *
	 * @var string
	 */
	public string $nif;
	/**
	 * Documento no exterior para clientes estrangeiros.
	 *
	 * @var string
	 */
	public string $documento_exterior;
	/**
	 * Indica se o cliente está inativo [S/N]
	 *
	 * @var string
	 */
	public string $inativo;
	/**
	 * Dados Bancários do cliente.
	 *
	 * @var DadosBancarios
	 */
	public DadosBancarios $dadosBancarios;
	/**
	 * Características do cliente.
	 *
	 * @var Caracteristicas[]
	 */
	public array $caracteristicas;
	/**
	 * Enviar anexos por e-mail (S/N).<BR><BR>Valores possíveis S ou N, sendo N o padrão.<BR><BR>Enviar anexos por e-mail além do link para o Portal Omie para o cliente cadastrado.<BR><BR>Esta função só poderá ser utilizada se o Portal Omie estiver ativo.
	 *
	 * @var string
	 */
	public string $enviar_anexos;
	/**
	 * Informações sobre o cadastro do cliente.
	 *
	 * @var Info
	 */
	public Info $info;
	/**
	 * Bloqueia a exclusão do registro. (S/N)
	 *
	 * @var string
	 */
	public string $bloquear_exclusao;
}
