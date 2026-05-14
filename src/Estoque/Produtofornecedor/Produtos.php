<?php

namespace OmieLib\Estoque\Produtofornecedor;

use OmieLib\Common\OmieFail;
use OmieLib\Estoque\Produtofornecedor\Request\PfListarRequest;
use OmieLib\Estoque\Produtofornecedor\Response\PfListarResponse;

/**
 * Lista de produtos
 *
 * @pw_element integer $nCodProd Código do produto.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element string $cCodIntProd Código de Integração do produto.<BR>(Utilizado em produtos criados via API, não é visualizado na tela)
 * @pw_element string $cCodigo Código do produto, conforme o fornecedor utiliza.
 * @pw_element string $cDescricao Descrição do produto.
 * @pw_complex produtos
 */
class Produtos{
	/**
	 * Código do produto.<BR>(Gerado internamente, não é visualizado na tela)
	 *
	 * @var integer
	 */
	public int $nCodProd;
	/**
	 * Código de Integração do produto.<BR>(Utilizado em produtos criados via API, não é visualizado na tela)
	 *
	 * @var string
	 */
	public string $cCodIntProd;
	/**
	 * Código do produto, conforme o fornecedor utiliza.
	 *
	 * @var string
	 */
	public string $cCodigo;
	/**
	 * Descrição do produto.
	 *
	 * @var string
	 */
	public string $cDescricao;
}
