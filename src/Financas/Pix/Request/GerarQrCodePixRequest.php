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
 * Gera um QrCode estático para pagamentos PIX.
 *
 * @pw_element integer $nIdConta Código da Conta Corrente.<BR>Preenchimento Opcional.<BR><BR>Caso não informado, assumirá a conta omie.CASH<BR><BR>Utilize a tag 'codigo' do método 'PesquisarContaCorrente' da API<BR>http://app.omie.com.br/api/v1/geral/contacorrente/<BR>para obter essa informação.
 * @pw_complex GerarQrCodePixRequest
 */
class GerarQrCodePixRequest{
	/**
	 * Código da Conta Corrente.<BR>Preenchimento Opcional.<BR><BR>Caso não informado, assumirá a conta omie.CASH<BR><BR>Utilize a tag 'codigo' do método 'PesquisarContaCorrente' da API<BR>http://app.omie.com.br/api/v1/geral/contacorrente/<BR>para obter essa informação.
	 *
	 * @var integer
	 */
	public int $nIdConta;
}
