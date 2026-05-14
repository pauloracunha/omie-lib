<?php

namespace OmieLib\Financas\Resumo;

use OmieLib\Common\OmieFail;
use OmieLib\Financas\Resumo\Request\ObterDetalhesLancamentoRequest;
use OmieLib\Financas\Resumo\Request\ObterListaEmAbertoRequest;
use OmieLib\Financas\Resumo\Request\ObterListaFinancasRequest;
use OmieLib\Financas\Resumo\Request\ObterResumoFinRequest;
use OmieLib\Financas\Resumo\Response\ObterDetalhesLancamentoResponse;
use OmieLib\Financas\Resumo\Response\ObterListaEmAbertoResponse;
use OmieLib\Financas\Resumo\Response\ObterListaFinancasResponse;
use OmieLib\Financas\Resumo\Response\ObterResumoFinResponse;

/**
 * Detalhes do boleto gerado.
 *
 * @pw_element integer $nIdPix ID do lançamento PIX.<BR>O conteúdo desse campo é o código interno gerado pelo Omie ao gerar o PIX.<BR><BR>Esse campo não é exibido na tela do Omie, mas é a chave de integração via API. <BR>É uma informação interna, utilizada apenas nas APIs.
 * @pw_element string $cCodIntPix Código do lançamento gerado pelo integrador.<BR><BR>Preenchimento obrigatório para o método "GerarPix".
 * @pw_element string $dEmissao Data de emissão.
 * @pw_element string $dVencimento Data de vencimento.
 * @pw_element string $cCopiaCola Código gerado a partir do QR Code para pagamento do PIX.
 * @pw_element string $cUrlPix Link para obter o PDF do QrCode do PIX.
 * @pw_element string $cStatus Status do PIX na API do banco.
 * @pw_element decimal $vValor Valor do PIX.
 * @pw_complex pixInfo
 */
class PixInfo{
	/**
	 * ID do lançamento PIX.<BR>O conteúdo desse campo é o código interno gerado pelo Omie ao gerar o PIX.<BR><BR>Esse campo não é exibido na tela do Omie, mas é a chave de integração via API. <BR>É uma informação interna, utilizada apenas nas APIs.
	 *
	 * @var integer
	 */
	public int $nIdPix;
	/**
	 * Código do lançamento gerado pelo integrador.<BR><BR>Preenchimento obrigatório para o método "GerarPix".
	 *
	 * @var string
	 */
	public string $cCodIntPix;
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
	 * Código gerado a partir do QR Code para pagamento do PIX.
	 *
	 * @var string
	 */
	public string $cCopiaCola;
	/**
	 * Link para obter o PDF do QrCode do PIX.
	 *
	 * @var string
	 */
	public string $cUrlPix;
	/**
	 * Status do PIX na API do banco.
	 *
	 * @var string
	 */
	public string $cStatus;
	/**
	 * Valor do PIX.
	 *
	 * @var decimal
	 */
	public float $vValor;
}
