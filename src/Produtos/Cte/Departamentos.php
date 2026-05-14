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
 * Distribuição por Departamentos.
 *
 * @pw_element string $idDepartamento Código do departamento.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element decimal $vDepartamento Valor do departamento. Preenchimento obrigatório
 * @pw_element decimal $pDepartamento Percentual do departamento. Preenchimento obrigatório
 * @pw_complex departamentos
 */
class Departamentos{
	/**
	 * Código do departamento.<BR>(Gerado internamente, não é visualizado na tela)
	 *
	 * @var string
	 */
	public string $idDepartamento;
	/**
	 * Valor do departamento. Preenchimento obrigatório
	 *
	 * @var decimal
	 */
	public float $vDepartamento;
	/**
	 * Percentual do departamento. Preenchimento obrigatório
	 *
	 * @var decimal
	 */
	public float $pDepartamento;
}
