<?php

namespace OmieLib\Produtos\Cte;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Cte\Request\CteAverbacaoRequest;
use OmieLib\Produtos\Cte\Request\CteCCRequest;
use OmieLib\Produtos\Cte\Request\CteCancelarRequest;
use OmieLib\Produtos\Cte\Request\CteExcluirFatRequest;
use OmieLib\Produtos\Cte\Request\CteExcluirRequest;
use OmieLib\Produtos\Cte\Request\CteFaturarLoteRequest;
use OmieLib\Produtos\Cte\Request\CteFaturarRequest;
use OmieLib\Produtos\Cte\Request\CteImportarRequest;
use OmieLib\Produtos\Cte\Request\CteListarNFeRequest;
use OmieLib\Produtos\Cte\Request\CteStatusFaturaRequest;
use OmieLib\Produtos\Cte\Response\CteAverbacaoResponse;
use OmieLib\Produtos\Cte\Response\CteCCResponse;
use OmieLib\Produtos\Cte\Response\CteCancelarResponse;
use OmieLib\Produtos\Cte\Response\CteExcluirFatResponse;
use OmieLib\Produtos\Cte\Response\CteExcluirResponse;
use OmieLib\Produtos\Cte\Response\CteFaturarLoteResponse;
use OmieLib\Produtos\Cte\Response\CteFaturarResponse;
use OmieLib\Produtos\Cte\Response\CteImportarResponse;
use OmieLib\Produtos\Cte\Response\CteListarNFeResponse;
use OmieLib\Produtos\Cte\Response\CteStatusFaturaResponse;

/**
 * Itens da Fatura.
 *
 * @pw_element string $cChaveCte Chave de acesso do CT-e
 * @pw_element decimal $nValorCte Valor do CT-e.
 * @pw_complex itensFaturaLote
 */
class ItensFaturaLote{
	/**
	 * Chave de acesso do CT-e
	 *
	 * @var string
	 */
	public string $cChaveCte;
	/**
	 * Valor do CT-e.
	 *
	 * @var decimal
	 */
	public float $nValorCte;
}
