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
 * Distribuição por Categorias.
 *
 * @pw_element string $idCategoria Código da Categoria.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element decimal $vCategoria Valor da categoria
 * @pw_element decimal $pCategoria Percentual da categoria
 * @pw_complex categorias
 */
class Categorias{
	/**
	 * Código da Categoria.<BR>(Gerado internamente, não é visualizado na tela)
	 *
	 * @var string
	 */
	public string $idCategoria;
	/**
	 * Valor da categoria
	 *
	 * @var decimal
	 */
	public float $vCategoria;
	/**
	 * Percentual da categoria
	 *
	 * @var decimal
	 */
	public float $pCategoria;
}
