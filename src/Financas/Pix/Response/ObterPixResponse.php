<?php

namespace OmieLib\Financas\Pix\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Financas\Pix\CInfo;
use OmieLib\Financas\Pix\ListaPix;
use OmieLib\Financas\Pix\ListaStatusPix;
use OmieLib\Financas\Pix\PIXJsonClient;
use OmieLib\Financas\Pix\Request\CancelarPixRequest;
use OmieLib\Financas\Pix\Request\GerarPixRequest;
use OmieLib\Financas\Pix\Request\GerarQrCodePixRequest;
use OmieLib\Financas\Pix\Request\ListarPixRequest;
use OmieLib\Financas\Pix\Request\ListarStatusPixRequest;
use OmieLib\Financas\Pix\Request\ObterPixRequest;
use OmieLib\Financas\Pix\Request\ObterStatusPixRequest;

/**
 * Detalhes do PIX.
 *
 * @pw_element integer $nIdPix ID do lançamento PIX.<BR>O conteúdo desse campo é o código interno gerado pelo Omie ao gerar o PIX.<BR><BR>Esse campo não é exibido na tela do Omie, mas é a chave de integração via API. <BR>É uma informação interna, utilizada apenas nas APIs.
 * @pw_element string $cCodIntPix Código do lançamento gerado pelo integrador.<BR><BR>Preenchimento obrigatório para o método 'GerarPix'.
 * @pw_element integer $cCliente Código do Cliente pagador do PIX
 * @pw_element integer $nCodTitulo Código da Conta a Receber.
 * @pw_element decimal $vValor Valor do PIX.<BR><BR>Preenchimento obrigatório para o método 'GerarPix'.
 * @pw_element string $dEmissao Data de emissão.
 * @pw_element string $dVencimento Data de vencimento.
 * @pw_element string $cUrlPix Link para obter o PDF do QrCode do PIX.
 * @pw_element string $cQrCode String para a renderização do QR Code PIX.
 * @pw_element string $cCopiaCola Código gerado a partir do QR Code para pagamento do PIX.
 * @pw_element string $cStatus Status do PIX.<BR><BR>Pode ser:<BR><BR>LIQUIDADO<BR>CANCELADO<BR>REGISTRADO
 * @pw_element cInfo $cInfo Informações sobre o cadastro do PIX.
 * @pw_complex ObterPixResponse
 */
class ObterPixResponse{
	/**
	 * ID do lançamento PIX.<BR>O conteúdo desse campo é o código interno gerado pelo Omie ao gerar o PIX.<BR><BR>Esse campo não é exibido na tela do Omie, mas é a chave de integração via API. <BR>É uma informação interna, utilizada apenas nas APIs.
	 *
	 * @var integer
	 */
	public int $nIdPix;
	/**
	 * Código do lançamento gerado pelo integrador.<BR><BR>Preenchimento obrigatório para o método 'GerarPix'.
	 *
	 * @var string
	 */
	public string $cCodIntPix;
	/**
	 * Código do Cliente pagador do PIX
	 *
	 * @var integer
	 */
	public int $cCliente;
	/**
	 * Código da Conta a Receber.
	 *
	 * @var integer
	 */
	public int $nCodTitulo;
	/**
	 * Valor do PIX.<BR><BR>Preenchimento obrigatório para o método 'GerarPix'.
	 *
	 * @var decimal
	 */
	public float $vValor;
	/**
	 * Data de emissão.
	 *
	 * @var string
	 */
	public string $dEmissao;
	/**
	 * Data de vencimento.
	 *
	 * @var string
	 */
	public string $dVencimento;
	/**
	 * Link para obter o PDF do QrCode do PIX.
	 *
	 * @var string
	 */
	public string $cUrlPix;
	/**
	 * String para a renderização do QR Code PIX.
	 *
	 * @var string
	 */
	public string $cQrCode;
	/**
	 * Código gerado a partir do QR Code para pagamento do PIX.
	 *
	 * @var string
	 */
	public string $cCopiaCola;
	/**
	 * Status do PIX.<BR><BR>Pode ser:<BR><BR>LIQUIDADO<BR>CANCELADO<BR>REGISTRADO
	 *
	 * @var string
	 */
	public string $cStatus;
	/**
	 * Informações sobre o cadastro do PIX.
	 *
	 * @var CInfo
	 */
	public CInfo $cInfo;
}
