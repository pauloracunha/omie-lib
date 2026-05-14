<?php

namespace OmieLib\Produtos\Cupomfiscalincluir;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Cupomfiscalincluir\Request\CfFecharCaixaRequest;
use OmieLib\Produtos\Cupomfiscalincluir\Request\CfIncluirEcfRequest;
use OmieLib\Produtos\Cupomfiscalincluir\Request\CfIncluirNfceRequest;
use OmieLib\Produtos\Cupomfiscalincluir\Request\CfIncluirRpsRequest;
use OmieLib\Produtos\Cupomfiscalincluir\Request\CfIncluirSatRequest;
use OmieLib\Produtos\Cupomfiscalincluir\Request\CfInutilizarNfceRequest;
use OmieLib\Produtos\Cupomfiscalincluir\Response\CfFecharCaixaResponse;
use OmieLib\Produtos\Cupomfiscalincluir\Response\CfIncluirEcfResponse;
use OmieLib\Produtos\Cupomfiscalincluir\Response\CfIncluirNfceResponse;
use OmieLib\Produtos\Cupomfiscalincluir\Response\CfIncluirRpsResponse;
use OmieLib\Produtos\Cupomfiscalincluir\Response\CfIncluirSatResponse;
use OmieLib\Produtos\Cupomfiscalincluir\Response\CfInutilizarNfceResponse;

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
