<?php

namespace OmieLib\Financas\Contareceberboleto\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Financas\Contareceberboleto\ContaReceberBoletoJsonClient;
use OmieLib\Financas\Contareceberboleto\Response\BoletoCancelarResponse;
use OmieLib\Financas\Contareceberboleto\Response\BoletoGerarResponse;
use OmieLib\Financas\Contareceberboleto\Response\BoletoObterResponse;
use OmieLib\Financas\Contareceberboleto\Response\BoletoProrrogarResponse;

/**
 * Solicitação do link do boleto de um título.
 *
 * @pw_element integer $nCodTitulo Código do título<BR>Código Interno do título no Omie.<BR><BR>Utilize a tag 'codigo_lancamento_omie' do método 'ListarContasReceber' da API<BR>/api/v1/financas/contareceber/<BR>para obter essa informação.
 * @pw_element string $cCodIntTitulo Código de Integração do Título.<BR><BR>Utilize a tag 'codigo_lancamento_integracao' do método 'ListarContasReceber' da API<BR>/api/v1/financas/contareceber/<BR>para obter essa informação.
 * @pw_complex boletoObterRequest
 */
class BoletoObterRequest{
	/**
	 * Código do título<BR>Código Interno do título no Omie.<BR><BR>Utilize a tag 'codigo_lancamento_omie' do método 'ListarContasReceber' da API<BR>/api/v1/financas/contareceber/<BR>para obter essa informação.
	 *
	 * @var integer
	 */
	public int $nCodTitulo;
	/**
	 * Código de Integração do Título.<BR><BR>Utilize a tag 'codigo_lancamento_integracao' do método 'ListarContasReceber' da API<BR>/api/v1/financas/contareceber/<BR>para obter essa informação.
	 *
	 * @var string
	 */
	public string $cCodIntTitulo;
}
