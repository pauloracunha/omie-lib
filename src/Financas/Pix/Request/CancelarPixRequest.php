<?php

namespace OmieLib\Financas\Pix\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Financas\Pix\CInfo;
use OmieLib\Financas\Pix\ListaPix;
use OmieLib\Financas\Pix\ListaStatusPix;
use OmieLib\Financas\Pix\PIXJsonClient;
use OmieLib\Financas\Pix\Response\CancelarPixResponse;
use OmieLib\Financas\Pix\Response\GerarPixResponse;
use OmieLib\Financas\Pix\Response\GerarQrCodePixResponse;
use OmieLib\Financas\Pix\Response\ListarPixResponse;
use OmieLib\Financas\Pix\Response\ListarStatusPixResponse;
use OmieLib\Financas\Pix\Response\ObterPixResponse;
use OmieLib\Financas\Pix\Response\ObterStatusPixResponse;

/**
 * Solicitação do cancelamento do PIX.
 *
 * @pw_element integer $nIdPix ID do lançamento PIX.<BR>O conteúdo desse campo é o código interno gerado pelo Omie ao gerar o PIX.<BR><BR>Esse campo não é exibido na tela do Omie, mas é a chave de integração via API. <BR>É uma informação interna, utilizada apenas nas APIs.
 * @pw_element string $cCodIntPix Código do lançamento gerado pelo integrador.<BR><BR>Preenchimento obrigatório para o método 'GerarPix'.
 * @pw_element boolean $lDel Indica se a conta a receber será excluída <BR>ao efetuar o cancelamento do PIX.<BR><BR>Ao ser preenchida com true a conta a receber que gerou o PIX será excluída.<BR><BR>Pode ser:<BR>false<BR>true <BR><BR>Default: true
 * @pw_complex CancelarPixRequest
 */
class CancelarPixRequest{
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
	 * Indica se a conta a receber será excluída <BR>ao efetuar o cancelamento do PIX.<BR><BR>Ao ser preenchida com true a conta a receber que gerou o PIX será excluída.<BR><BR>Pode ser:<BR>false<BR>true <BR><BR>Default: true
	 *
	 * @var boolean
	 */
	public bool $lDel;
}
