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
 * Informações adicionais da nota de entrada
 *
 * @pw_element string $cCodCateg Código da categoria.<BR><BR>Preenchimento obrigatório.<BR><BR>Informação localizada na Aba "Informações Adicionais" do pedido.<BR><BR>Utilize a tag "codigo" do método "ListarCategorias" da API<BR>http://app.omie.com.br/api/v1/geral/categorias/<BR>para obter essa informação.
 * @pw_element string $cContato Contato.<BR><BR>Preenchimento opcional.<BR><BR>Informação localizada na Aba "Informações Adicionais" do pedido.
 * @pw_element integer $nCodProj Código do projeto.<BR><BR>Preenchimento opcional.<BR><BR>Informação localizada na Aba "Informações Adicionais" do pedido.<BR><BR>Utilize a tag "codigo" do método "ListarProjetos" da API<BR>http://app.omie.com.br/api/v1/geral/projetos/<BR>para obter essa informação.
 * @pw_element string $cPedido Número do pedido do cliente.<BR><BR>Preenchimento opcional.<BR><BR>Informação localizada na Aba "Informações Adicionais" do pedido.
 * @pw_element outrosDet $outrosDet Informações adicionais outros detalhes da nota de entrada
 * @pw_element string $cDadosAdic Dados adicionais para a nota fiscal.<BR><BR>Preenchimento opcional.<BR><BR>Utilize o caracter pipe ( | ) como separador de linha.<BR><BR>Informação localizada na Aba "Informações Adicionais" do pedido.
 * @pw_element string $cConsFinal Nota fiscal para consumo final.<BR><BR>Preenchimento obrigatório.<BR><BR>Informar "S" ou "N".<BR><BR>Informação localizada na Aba "Informações Adicionais" do pedido.
 * @pw_element integer $nCodCC Código interno da conta corrente da nota fiscal (este é o código da conta corrente no Omie)
 * @pw_element nfRelacionada $nfRelacionada Detalhes da NF referenciada
 * @pw_element infAdicFisco $infAdicFisco Informações adicionais de interesse do fisco.
 * @pw_complex infAdic
 */
class InfAdic{
	/**
	 * Código da categoria.<BR><BR>Preenchimento obrigatório.<BR><BR>Informação localizada na Aba "Informações Adicionais" do pedido.<BR><BR>Utilize a tag "codigo" do método "ListarCategorias" da API<BR>http://app.omie.com.br/api/v1/geral/categorias/<BR>para obter essa informação.
	 *
	 * @var string
	 */
	public string $cCodCateg;
	/**
	 * Contato.<BR><BR>Preenchimento opcional.<BR><BR>Informação localizada na Aba "Informações Adicionais" do pedido.
	 *
	 * @var string
	 */
	public string $cContato;
	/**
	 * Código do projeto.<BR><BR>Preenchimento opcional.<BR><BR>Informação localizada na Aba "Informações Adicionais" do pedido.<BR><BR>Utilize a tag "codigo" do método "ListarProjetos" da API<BR>http://app.omie.com.br/api/v1/geral/projetos/<BR>para obter essa informação.
	 *
	 * @var integer
	 */
	public int $nCodProj;
	/**
	 * Número do pedido do cliente.<BR><BR>Preenchimento opcional.<BR><BR>Informação localizada na Aba "Informações Adicionais" do pedido.
	 *
	 * @var string
	 */
	public string $cPedido;
	/**
	 * Informações adicionais outros detalhes da nota de entrada
	 *
	 * @var OutrosDet
	 */
	public OutrosDet $outrosDet;
	/**
	 * Dados adicionais para a nota fiscal.<BR><BR>Preenchimento opcional.<BR><BR>Utilize o caracter pipe ( | ) como separador de linha.<BR><BR>Informação localizada na Aba "Informações Adicionais" do pedido.
	 *
	 * @var string
	 */
	public string $cDadosAdic;
	/**
	 * Nota fiscal para consumo final.<BR><BR>Preenchimento obrigatório.<BR><BR>Informar "S" ou "N".<BR><BR>Informação localizada na Aba "Informações Adicionais" do pedido.
	 *
	 * @var string
	 */
	public string $cConsFinal;
	/**
	 * Código interno da conta corrente da nota fiscal (este é o código da conta corrente no Omie)
	 *
	 * @var integer
	 */
	public int $nCodCC;
	/**
	 * Detalhes da NF referenciada
	 *
	 * @var NfRelacionada
	 */
	public NfRelacionada $nfRelacionada;
	/**
	 * Informações adicionais de interesse do fisco.
	 *
	 * @var InfAdicFisco
	 */
	public InfAdicFisco $infAdicFisco;
}
