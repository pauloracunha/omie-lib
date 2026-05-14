<?php

namespace OmieLib\Produtos\Pedido;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Pedido\Request\PvpAlterarPedFatRequest;
use OmieLib\Produtos\Pedido\Request\PvpConsultarRequest;
use OmieLib\Produtos\Pedido\Request\PvpDevolverRequest;
use OmieLib\Produtos\Pedido\Request\PvpExcluirRequest;
use OmieLib\Produtos\Pedido\Request\PvpListarRequest;
use OmieLib\Produtos\Pedido\Request\PvpSimularImpRequest;
use OmieLib\Produtos\Pedido\Request\PvpStatusRequest;
use OmieLib\Produtos\Pedido\Request\PvpTrocarEtapaRequest;
use OmieLib\Produtos\Pedido\Response\PvpAlterarPedFatResponse;
use OmieLib\Produtos\Pedido\Response\PvpConsultarResponse;
use OmieLib\Produtos\Pedido\Response\PvpDevolverResponse;
use OmieLib\Produtos\Pedido\Response\PvpExcluirResponse;
use OmieLib\Produtos\Pedido\Response\PvpListarResponse;
use OmieLib\Produtos\Pedido\Response\PvpSimularImpResponse;
use OmieLib\Produtos\Pedido\Response\PvpStatusResponse;
use OmieLib\Produtos\Pedido\Response\PvpTrocarEtapaResponse;

/**
 * Informações de cliente para simulação dos impostos.
 *
 * @pw_element string $clientes_contribuinte Indica que o Cliente é Contribuinte do ICMS<BR><BR>Informar "S" ou "N".<BR><BR>Informação localizada na Aba "Inscrições CNAE e Outros" do cadastro do Cliente.
 * @pw_element string $clientes_estado UF do Local de Embarque
 * @pw_element string $cidades_codmunibge Código do município conforme tabela do IBGE para simulação dos impostos
 * @pw_element string $clientes_suframa Inscrição SUFRAMA do cliente para simulação dos impostos.<BR><BR>Informação localizada na Aba "Inscrições CNAE e Outros" do cadastro do Cliente
 * @pw_element string $clientes_cnae Informação localizada na Aba "Inscrições CNAE e Outros" do cadastro do Cliente para simulação dos impostos
 * @pw_element string $tipo_atividade Tipo da Atividade<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Inscrições CNAE e Outros" do cadastro do Cliente.<BR><BR>Utilize a tag "cCodigo" do método "ListarTipoAtiv" da API<BR>http://app.omie.com.br/api/v1/geral/tpativ/<BR>para obter essa informação.
 * @pw_element string $optante_simples_nacional Indica se o Cliente / Fornecedor é Optante do Simples Nacional <BR>Preenchimento Opcional.<BR><BR>Informar "S" ou "N".<BR><BR>Informação localizada na Aba "Inscrições CNAE e Outros" do cadastro do Cliente.
 * @pw_complex cliente_simul
 */
class Cliente_simul{
	/**
	 * Indica que o Cliente é Contribuinte do ICMS<BR><BR>Informar "S" ou "N".<BR><BR>Informação localizada na Aba "Inscrições CNAE e Outros" do cadastro do Cliente.
	 *
	 * @var string
	 */
	public string $clientes_contribuinte;
	/**
	 * UF do Local de Embarque
	 *
	 * @var string
	 */
	public string $clientes_estado;
	/**
	 * Código do município conforme tabela do IBGE para simulação dos impostos
	 *
	 * @var string
	 */
	public string $cidades_codmunibge;
	/**
	 * Inscrição SUFRAMA do cliente para simulação dos impostos.<BR><BR>Informação localizada na Aba "Inscrições CNAE e Outros" do cadastro do Cliente
	 *
	 * @var string
	 */
	public string $clientes_suframa;
	/**
	 * Informação localizada na Aba "Inscrições CNAE e Outros" do cadastro do Cliente para simulação dos impostos
	 *
	 * @var string
	 */
	public string $clientes_cnae;
	/**
	 * Tipo da Atividade<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Inscrições CNAE e Outros" do cadastro do Cliente.<BR><BR>Utilize a tag "cCodigo" do método "ListarTipoAtiv" da API<BR>http://app.omie.com.br/api/v1/geral/tpativ/<BR>para obter essa informação.
	 *
	 * @var string
	 */
	public string $tipo_atividade;
	/**
	 * Indica se o Cliente / Fornecedor é Optante do Simples Nacional <BR>Preenchimento Opcional.<BR><BR>Informar "S" ou "N".<BR><BR>Informação localizada na Aba "Inscrições CNAE e Outros" do cadastro do Cliente.
	 *
	 * @var string
	 */
	public string $optante_simples_nacional;
}
