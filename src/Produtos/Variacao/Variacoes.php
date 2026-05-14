<?php

namespace OmieLib\Produtos\Variacao;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Variacao\Request\VariacaoConsultarRequest;
use OmieLib\Produtos\Variacao\Request\VariacaoIncluirRequest;
use OmieLib\Produtos\Variacao\Request\VariacaoListarRequest;
use OmieLib\Produtos\Variacao\Response\VariacaoConsultarResponse;
use OmieLib\Produtos\Variacao\Response\VariacaoIncluirResponse;
use OmieLib\Produtos\Variacao\Response\VariacaoListarResponse;

/**
 * Informação das variações do produto.
 *
 * @pw_element integer $nIdVariacao Id da variação.<BR>Id criado para integrar com a  característica do produto.
 * @pw_element integer $nIdProdVariacao Id do produto variação.<BR>Id do produto criado pelas características selecionadas.<BR>
 * @pw_element string $cDescProdVariacao Descrição do produto variação .
 * @pw_element CaractVariacoesArray $CaractVariacoes Características das variações.
 * @pw_complex variacoes
 */
class Variacoes{
	/**
	 * Id da variação.<BR>Id criado para integrar com a  característica do produto.
	 *
	 * @var integer
	 */
	public int $nIdVariacao;
	/**
	 * Id do produto variação.<BR>Id do produto criado pelas características selecionadas.<BR>
	 *
	 * @var integer
	 */
	public int $nIdProdVariacao;
	/**
	 * Descrição do produto variação .
	 *
	 * @var string
	 */
	public string $cDescProdVariacao;
	/**
	 * Características das variações.
	 *
	 * @var CaractVariacoes[]
	 */
	public array $CaractVariacoes;
}
