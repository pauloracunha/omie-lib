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
 * Informações das variações.
 *
 * @pw_element ident $ident Identificação do produto.
 * @pw_element variacoesArray $variacoes Informação das variações do produto.
 * @pw_complex listaVariacoes
 */
class ListaVariacoes{
	/**
	 * Identificação do produto.
	 *
	 * @var Ident
	 */
	public Ident $ident;
	/**
	 * Informação das variações do produto.
	 *
	 * @var Variacoes[]
	 */
	public array $variacoes;
}
