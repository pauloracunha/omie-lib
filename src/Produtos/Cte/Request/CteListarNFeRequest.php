<?php

namespace OmieLib\Produtos\Cte\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Cte\ConhecimentoTransporteJsonClient;
use OmieLib\Produtos\Cte\Departamentos;
use OmieLib\Produtos\Cte\ItensFatura;
use OmieLib\Produtos\Cte\ItensFaturaLote;
use OmieLib\Produtos\Cte\NfeEncontradas;
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
 * Solicitação de listagem de NF-es cuja empresa é mencionada como transportadora no XML da NF-e.
 *
 * @pw_element integer $nPagina Número da página que será listada.
 * @pw_element integer $nRegPorPagina Número de registros retornados
 * @pw_element string $dEmiInicial Data de emissão inicial.
 * @pw_element string $hEmiInicial Hora de emissão inicial.
 * @pw_element string $dEmiFinal Data de emissão final.
 * @pw_element string $hEmiFinal Hora de emissão final.
 * @pw_element string $chNFe Chave da NF-e.
 * @pw_element string $tpNF Tipo de nota fiscal.<BR><BR>Pode ser:<BR>0 - Entrada.<BR>1 - Saída.
 * @pw_complex cteListarNFeRequest
 */
class CteListarNFeRequest{
	/**
	 * Número da página que será listada.
	 *
	 * @var integer
	 */
	public int $nPagina;
	/**
	 * Número de registros retornados
	 *
	 * @var integer
	 */
	public int $nRegPorPagina;
	/**
	 * Data de emissão inicial.
	 *
	 * @var string
	 */
	public string $dEmiInicial;
	/**
	 * Hora de emissão inicial.
	 *
	 * @var string
	 */
	public string $hEmiInicial;
	/**
	 * Data de emissão final.
	 *
	 * @var string
	 */
	public string $dEmiFinal;
	/**
	 * Hora de emissão final.
	 *
	 * @var string
	 */
	public string $hEmiFinal;
	/**
	 * Chave da NF-e.
	 *
	 * @var string
	 */
	public string $chNFe;
	/**
	 * Tipo de nota fiscal.<BR><BR>Pode ser:<BR>0 - Entrada.<BR>1 - Saída.
	 *
	 * @var string
	 */
	public string $tpNF;
}
