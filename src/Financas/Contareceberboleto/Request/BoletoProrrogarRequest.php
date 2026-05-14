<?php

namespace OmieLib\Financas\Contareceberboleto\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Financas\Contareceberboleto\ContaReceberBoletoJsonClient;
use OmieLib\Financas\Contareceberboleto\Response\BoletoCancelarResponse;
use OmieLib\Financas\Contareceberboleto\Response\BoletoGerarResponse;
use OmieLib\Financas\Contareceberboleto\Response\BoletoObterResponse;
use OmieLib\Financas\Contareceberboleto\Response\BoletoProrrogarResponse;

/**
 * Prorroga o vencimento de um Boleto.
 *
 * @pw_element integer $nCodTitulo Código do título<BR>Código Interno do título no Omie.<BR><BR>Utilize a tag 'codigo_lancamento_omie' do método 'ListarContasReceber' da API<BR>/api/v1/financas/contareceber/<BR>para obter essa informação.
 * @pw_element string $cCodIntTitulo Código de Integração do Título.<BR><BR>Utilize a tag 'codigo_lancamento_integracao' do método 'ListarContasReceber' da API<BR>/api/v1/financas/contareceber/<BR>para obter essa informação.
 * @pw_element string $dDtVenc Data de vencimento.
 * @pw_complex boletoProrrogarRequest
 */
class BoletoProrrogarRequest{
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
	/**
	 * Data de vencimento.
	 *
	 * @var string
	 */
	public string $dDtVenc;
}
