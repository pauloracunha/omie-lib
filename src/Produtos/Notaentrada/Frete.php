<?php

namespace OmieLib\Produtos\Notaentrada;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Notaentrada\Request\NeAlterarRequest;
use OmieLib\Produtos\Notaentrada\Request\NeConsultarRequest;
use OmieLib\Produtos\Notaentrada\Request\NeExcluirRequest;
use OmieLib\Produtos\Notaentrada\Request\NeIncluirRequest;
use OmieLib\Produtos\Notaentrada\Request\NeListarRequest;
use OmieLib\Produtos\Notaentrada\Request\NeStatusRequest;
use OmieLib\Produtos\Notaentrada\Response\NeAlterarResponse;
use OmieLib\Produtos\Notaentrada\Response\NeConsultarResponse;
use OmieLib\Produtos\Notaentrada\Response\NeExcluirResponse;
use OmieLib\Produtos\Notaentrada\Response\NeIncluirResponse;
use OmieLib\Produtos\Notaentrada\Response\NeListarResponse;
use OmieLib\Produtos\Notaentrada\Response\NeStatusResponse;

/**
 * Dados do frete da nota de entrada
 *
 * @pw_element integer $nCodTransp Código da transportadora<BR><BR>Preenchimento opcional.<BR><BR>Esse campo não é exibido na tela do pedido. <BR>É uma informação interna, utilizada apenas nas APIs.<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do Pedido.<BR><BR>Utilize a tag "codigo_cliente_omie" do método "ListarClientes" da API<BR>http://app.omie.com.br/api/v1/geral/clientes/<BR>para obter essa informação.<BR><BR>OBS: O Omie uitliza o cadastro de clientes para registrar também fornecedores e transportadoras.
 * @pw_element string $cTpFrete Tipo de frete.<BR><BR>Preenchimento obrigatório.<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do pedido.<BR><BR>Valores disponíveis:<BR><BR>"0" - Frete por conta do emitente.<BR>"1" - Frete por conta do destinatário.<BR>"2" - Frete por conta de terceiros.<BR>"9" - Sem frete.
 * @pw_element string $cPlaca Placa do veículo.<BR><BR>Preenchimento opcional.<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do pedido.
 * @pw_element string $cUF Estado da placa do veículo.<BR><BR>Preenchimento opcional.<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do Pedido.<BR><BR>
 * @pw_element integer $nQtdVol Quantidade de volumes<BR><BR>Preenchimento opcional.<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do Pedido.
 * @pw_element string $cEspVol Espécie de volume.<BR><BR>Preenchimento opcional.<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do Pedido.
 * @pw_element string $cMarVol Marca dos volumes.<BR><BR>Preenchimento opcional.<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do Pedido.
 * @pw_element string $cNumVol Numeração dos volumes.<BR><BR>Preenchimento opcional.<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do pedido.
 * @pw_element decimal $nPesoLiq Peso líquído (Kg)<BR><BR>Preenchimento opcional.<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do pedido.
 * @pw_element decimal $nPesoBruto Peso bruto (Kg)<BR><BR>Preenchimento opcional.<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do pedido.
 * @pw_element decimal $nValFrete Valor do frete<BR><BR>Preenchimento opcional.<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do pedido.
 * @pw_element decimal $nValSeguro Valor do seguro<BR><BR>Preenchimento opcional.<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do pedido.
 * @pw_element decimal $nValOutras Valor de outras despesas acessórias.<BR><BR>Preenchimento opcional.<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do pedido.
 * @pw_element string $cNumeroLacre Número dos Lacres
 * @pw_element string $cRegistroTransp RNTRC (ANTT) - Registro de transporte
 * @pw_element string $cVeiculoProprio O transporte será realizado com veículo próprio.<BR>Preenchimento Opcional.<BR><BR>Informar "S" ou "N".<BR><BR>Informação localizada na Aba "Frete e Outras Despesas".
 * @pw_complex frete
 */
class Frete{
	/**
	 * Código da transportadora<BR><BR>Preenchimento opcional.<BR><BR>Esse campo não é exibido na tela do pedido. <BR>É uma informação interna, utilizada apenas nas APIs.<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do Pedido.<BR><BR>Utilize a tag "codigo_cliente_omie" do método "ListarClientes" da API<BR>http://app.omie.com.br/api/v1/geral/clientes/<BR>para obter essa informação.<BR><BR>OBS: O Omie uitliza o cadastro de clientes para registrar também fornecedores e transportadoras.
	 *
	 * @var integer
	 */
	public int $nCodTransp;
	/**
	 * Tipo de frete.<BR><BR>Preenchimento obrigatório.<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do pedido.<BR><BR>Valores disponíveis:<BR><BR>"0" - Frete por conta do emitente.<BR>"1" - Frete por conta do destinatário.<BR>"2" - Frete por conta de terceiros.<BR>"9" - Sem frete.
	 *
	 * @var string
	 */
	public string $cTpFrete;
	/**
	 * Placa do veículo.<BR><BR>Preenchimento opcional.<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do pedido.
	 *
	 * @var string
	 */
	public string $cPlaca;
	/**
	 * Estado da placa do veículo.<BR><BR>Preenchimento opcional.<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do Pedido.<BR><BR>
	 *
	 * @var string
	 */
	public string $cUF;
	/**
	 * Quantidade de volumes<BR><BR>Preenchimento opcional.<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do Pedido.
	 *
	 * @var integer
	 */
	public int $nQtdVol;
	/**
	 * Espécie de volume.<BR><BR>Preenchimento opcional.<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do Pedido.
	 *
	 * @var string
	 */
	public string $cEspVol;
	/**
	 * Marca dos volumes.<BR><BR>Preenchimento opcional.<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do Pedido.
	 *
	 * @var string
	 */
	public string $cMarVol;
	/**
	 * Numeração dos volumes.<BR><BR>Preenchimento opcional.<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do pedido.
	 *
	 * @var string
	 */
	public string $cNumVol;
	/**
	 * Peso líquído (Kg)<BR><BR>Preenchimento opcional.<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do pedido.
	 *
	 * @var decimal
	 */
	public float $nPesoLiq;
	/**
	 * Peso bruto (Kg)<BR><BR>Preenchimento opcional.<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do pedido.
	 *
	 * @var decimal
	 */
	public float $nPesoBruto;
	/**
	 * Valor do frete<BR><BR>Preenchimento opcional.<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do pedido.
	 *
	 * @var decimal
	 */
	public float $nValFrete;
	/**
	 * Valor do seguro<BR><BR>Preenchimento opcional.<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do pedido.
	 *
	 * @var decimal
	 */
	public float $nValSeguro;
	/**
	 * Valor de outras despesas acessórias.<BR><BR>Preenchimento opcional.<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do pedido.
	 *
	 * @var decimal
	 */
	public float $nValOutras;
	/**
	 * Número dos Lacres
	 *
	 * @var string
	 */
	public string $cNumeroLacre;
	/**
	 * RNTRC (ANTT) - Registro de transporte
	 *
	 * @var string
	 */
	public string $cRegistroTransp;
	/**
	 * O transporte será realizado com veículo próprio.<BR>Preenchimento Opcional.<BR><BR>Informar "S" ou "N".<BR><BR>Informação localizada na Aba "Frete e Outras Despesas".
	 *
	 * @var string
	 */
	public string $cVeiculoProprio;
}
