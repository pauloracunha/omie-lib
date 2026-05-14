<?php

namespace OmieLib\Geral\Clientes;

use OmieLib\Common\OmieFail;

/**
 * Filtrar cadastro de clientes
 *
 * @pw_element integer $codigo_cliente_omie Código de Cliente / Fornecedor
 * @pw_element string $codigo_cliente_integracao Código de Integração com sistemas legados.
 * @pw_element string $cnpj_cpf CNPJ / CPF<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.
 * @pw_element string $razao_social Razão Social<BR>Preenchimento Obrigatório.
 * @pw_element string $nome_fantasia Nome Fantasia<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.
 * @pw_element string $endereco Endereço<BR>Preenchimento Opcional.<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.<BR><BR>Informação localizada na Aba "Endereço" do cadastro do Cliente.<BR><BR>DEPRECATED para a estrutura "clientesFiltrar".
 * @pw_element string $bairro Bairro<BR>Preenchimento Opcional.<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.<BR><BR>Informação localizada na Aba "Endereço" do cadastro do Cliente.<BR><BR>DEPRECATED para a estrutura "clientesFiltrar".
 * @pw_element string $cidade Código da Cidade<BR>Recebe o código ibge ou o nome da cidade.<BR><BR>Preenchimento Opcional caso seja enviado o codigo IBGE no campo "cidade_ibge"<BR><BR>Informação localizada na Aba "Endereço" do cadastro do Cliente.<BR><BR>Utilize a tag "nCodIBGE" do método "PesquisarCidades" da API<BR>/api/v1/geral/cidades/<BR>para obter essa informação.<BR><BR>Utilize a tag "cCod" do método "PesquisarCidades" da API<BR>/api/v1/geral/cidades/<BR>para obter essa informação.<BR><BR>DEPRECATED para a estrutura "clientesFiltrar".
 * @pw_element string $estado Sigla do Estado<BR>Preenchimento Opcional.<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.<BR><BR>Informação localizada na Aba "Endereço" do cadastro do Cliente.<BR><BR>Utilize a tag "cSigla" do método "ListarEstados" da API<BR>http://app.omie.com.br/api/v1/geral/estados/<BR>para obter essa informação.<BR><BR>DEPRECATED para a estrutura "clientesFiltro".
 * @pw_element string $cep CEP<BR>Preenchimento Opcional.<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.<BR><BR>Informação localizada na Aba "Endereço" do cadastro do Cliente.<BR><BR>DEPRECATED para a estrutura "clientesFiltrar".
 * @pw_element string $contato Nome para contato<BR>Preenchimento Opcional.<BR><BR>DEPRECATED para a estrutura "clientesFiltrar".
 * @pw_element string $email E-Mail<BR>Preenchimento Opcional.<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.<BR><BR>Informação localizada na Aba "Telefones e E-mail" do cadastro do Cliente.<BR><BR>DEPRECATED para a estrutura "clientesFiltrar".
 * @pw_element string $homepage WebSite<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Telefones e E-mail" do cadastro do Cliente.<BR><BR>DEPRECATED para a estrutura "clientesFiltrar".
 * @pw_element string $inscricao_municipal Inscrição Municipal<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Inscrições CNAE e Outros" do cadastro do Cliente.<BR><BR>DEPRECATED para a estrutura "clientesFiltrar".
 * @pw_element string $inscricao_estadual Inscrição Estadual<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Inscrições CNAE e Outros" do cadastro do Cliente.<BR><BR>DEPRECATED para a estrutura "clientesFiltrar".
 * @pw_element string $inscricao_suframa Inscrição Suframa<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Inscrições CNAE e Outros" do cadastro do Cliente.<BR><BR>DEPRECATED para a estrutura "clientesFiltrar".
 * @pw_element string $pessoa_fisica Pessoa Física<BR>Preenchimento automático - Não informar.<BR><BR>Informar "S" ou "N".<BR><BR>DEPRECATED para a estrutura "clientesFiltrar".
 * @pw_element string $optante_simples_nacional Indica se o Cliente / Fornecedor é Optante do Simples Nacional <BR>Preenchimento Opcional.<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.<BR><BR>Informar "S" ou "N".<BR><BR>Informação localizada na Aba "Inscrições CNAE e Outros" do cadastro do Cliente.<BR><BR>DEPRECATED para a estrutura "clientesFiltrar".
 * @pw_element string $inativo Indica se o cliente está inativo [S/N]
 * @pw_element tagsArray $tags Tags do Cliente ou Fornecedor<BR>Preenchimento Opcional.
 * @pw_complex clientesFiltro
 */
class ClientesFiltro{
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
	 * CNPJ / CPF<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.
	 *
	 * @var string
	 */
	public string $cnpj_cpf;
	/**
	 * Razão Social<BR>Preenchimento Obrigatório.
	 *
	 * @var string
	 */
	public string $razao_social;
	/**
	 * Nome Fantasia<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.
	 *
	 * @var string
	 */
	public string $nome_fantasia;
	/**
	 * Endereço<BR>Preenchimento Opcional.<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.<BR><BR>Informação localizada na Aba "Endereço" do cadastro do Cliente.<BR><BR>DEPRECATED para a estrutura "clientesFiltrar".
	 *
	 * @var string
	 */
	public string $endereco;
	/**
	 * Bairro<BR>Preenchimento Opcional.<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.<BR><BR>Informação localizada na Aba "Endereço" do cadastro do Cliente.<BR><BR>DEPRECATED para a estrutura "clientesFiltrar".
	 *
	 * @var string
	 */
	public string $bairro;
	/**
	 * Código da Cidade<BR>Recebe o código ibge ou o nome da cidade.<BR><BR>Preenchimento Opcional caso seja enviado o codigo IBGE no campo "cidade_ibge"<BR><BR>Informação localizada na Aba "Endereço" do cadastro do Cliente.<BR><BR>Utilize a tag "nCodIBGE" do método "PesquisarCidades" da API<BR>/api/v1/geral/cidades/<BR>para obter essa informação.<BR><BR>Utilize a tag "cCod" do método "PesquisarCidades" da API<BR>/api/v1/geral/cidades/<BR>para obter essa informação.<BR><BR>DEPRECATED para a estrutura "clientesFiltrar".
	 *
	 * @var string
	 */
	public string $cidade;
	/**
	 * Sigla do Estado<BR>Preenchimento Opcional.<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.<BR><BR>Informação localizada na Aba "Endereço" do cadastro do Cliente.<BR><BR>Utilize a tag "cSigla" do método "ListarEstados" da API<BR>http://app.omie.com.br/api/v1/geral/estados/<BR>para obter essa informação.<BR><BR>DEPRECATED para a estrutura "clientesFiltro".
	 *
	 * @var string
	 */
	public string $estado;
	/**
	 * CEP<BR>Preenchimento Opcional.<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.<BR><BR>Informação localizada na Aba "Endereço" do cadastro do Cliente.<BR><BR>DEPRECATED para a estrutura "clientesFiltrar".
	 *
	 * @var string
	 */
	public string $cep;
	/**
	 * Nome para contato<BR>Preenchimento Opcional.<BR><BR>DEPRECATED para a estrutura "clientesFiltrar".
	 *
	 * @var string
	 */
	public string $contato;
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
	 * Inscrição Municipal<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Inscrições CNAE e Outros" do cadastro do Cliente.<BR><BR>DEPRECATED para a estrutura "clientesFiltrar".
	 *
	 * @var string
	 */
	public string $inscricao_municipal;
	/**
	 * Inscrição Estadual<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Inscrições CNAE e Outros" do cadastro do Cliente.<BR><BR>DEPRECATED para a estrutura "clientesFiltrar".
	 *
	 * @var string
	 */
	public string $inscricao_estadual;
	/**
	 * Inscrição Suframa<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Inscrições CNAE e Outros" do cadastro do Cliente.<BR><BR>DEPRECATED para a estrutura "clientesFiltrar".
	 *
	 * @var string
	 */
	public string $inscricao_suframa;
	/**
	 * Pessoa Física<BR>Preenchimento automático - Não informar.<BR><BR>Informar "S" ou "N".<BR><BR>DEPRECATED para a estrutura "clientesFiltrar".
	 *
	 * @var string
	 */
	public string $pessoa_fisica;
	/**
	 * Indica se o Cliente / Fornecedor é Optante do Simples Nacional <BR>Preenchimento Opcional.<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.<BR><BR>Informar "S" ou "N".<BR><BR>Informação localizada na Aba "Inscrições CNAE e Outros" do cadastro do Cliente.<BR><BR>DEPRECATED para a estrutura "clientesFiltrar".
	 *
	 * @var string
	 */
	public string $optante_simples_nacional;
	/**
	 * Indica se o cliente está inativo [S/N]
	 *
	 * @var string
	 */
	public string $inativo;
	/**
	 * Tags do Cliente ou Fornecedor<BR>Preenchimento Opcional.
	 *
	 * @var Tags[]
	 */
	public array $tags;
}
