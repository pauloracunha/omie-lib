<?php

namespace OmieLib\Estoque\Consulta;

use OmieLib\Common\OmieFail;
use OmieLib\Estoque\Consulta\Request\EstoqueMovimentoRequest;
use OmieLib\Estoque\Consulta\Request\ListarEstPosRequest;
use OmieLib\Estoque\Consulta\Request\ListarMovEstoqueRequest;
use OmieLib\Estoque\Consulta\Response\EstoqueMovimentoResponse;
use OmieLib\Estoque\Consulta\Response\ListarEstPosResponse;
use OmieLib\Estoque\Consulta\Response\ListarMovEstoqueResponse;

/**
 * Lista de produtos por ID, Código de Integração ou código do produto.
 *
 * @pw_element integer $nCodProd Código do Produto.
 * @pw_element string $cCodInt Código de Integração do Produto.
 * @pw_element string $cCodigo Código do produto.<BR>(Visualizado na tela).
 * @pw_complex lista_produtos
 */
class Lista_produtos{
	/**
	 * Código do Produto.
	 *
	 * @var integer
	 */
	public int $nCodProd;
	/**
	 * Código de Integração do Produto.
	 *
	 * @var string
	 */
	public string $cCodInt;
	/**
	 * Código do produto.<BR>(Visualizado na tela).
	 *
	 * @var string
	 */
	public string $cCodigo;
}
