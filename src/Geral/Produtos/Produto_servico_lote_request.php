<?php

namespace OmieLib\Geral\Produtos;

use OmieLib\Common\OmieFail;

/**
 * Importação em Lote de produtos
 *
 * @pw_element integer $lote Número do lote
 * @pw_element produto_servico_cadastroArray $produto_servico_cadastro Cadastro completo de produtos
 * @pw_complex produto_servico_lote_request
 */
class Produto_servico_lote_request{
	/**
	 * Número do lote
	 *
	 * @var integer
	 */
	public int $lote;
	/**
	 * Cadastro completo de produtos
	 *
	 * @var Produto_servico_cadastro[]
	 */
	public array $produto_servico_cadastro;
}
