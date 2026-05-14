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
 * Resposta da solicitação de Status do PIX.
 *
 * @pw_element integer $nIdPix ID do lançamento PIX.<BR>O conteúdo desse campo é o código interno gerado pelo Omie ao gerar o PIX.<BR><BR>Esse campo não é exibido na tela do Omie, mas é a chave de integração via API. <BR>É uma informação interna, utilizada apenas nas APIs.
 * @pw_element string $cCodIntPix Código do lançamento gerado pelo integrador.<BR><BR>Preenchimento obrigatório para o método 'GerarPix'.
 * @pw_element integer $nCodTitulo Código da Conta a Receber.
 * @pw_element decimal $vValor Valor do PIX.<BR><BR>Preenchimento obrigatório para o método 'GerarPix'.
 * @pw_element string $cStatus Status do PIX.<BR><BR>Pode ser:<BR><BR>LIQUIDADO<BR>CANCELADO<BR>REGISTRADO
 * @pw_complex ObterStatusPixResponse
 */
class ObterStatusPixResponse{
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
	 * Status do PIX.<BR><BR>Pode ser:<BR><BR>LIQUIDADO<BR>CANCELADO<BR>REGISTRADO
	 *
	 * @var string
	 */
	public string $cStatus;
}
