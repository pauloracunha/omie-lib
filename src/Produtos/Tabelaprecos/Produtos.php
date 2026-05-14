<?php

namespace OmieLib\Produtos\Tabelaprecos;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Tabelaprecos\Request\TprAltPrecoItemRequest;
use OmieLib\Produtos\Tabelaprecos\Request\TprAlterarRequest;
use OmieLib\Produtos\Tabelaprecos\Request\TprAtivarRequest;
use OmieLib\Produtos\Tabelaprecos\Request\TprAtualizarRequest;
use OmieLib\Produtos\Tabelaprecos\Request\TprConsultarRequest;
use OmieLib\Produtos\Tabelaprecos\Request\TprExcluirRequest;
use OmieLib\Produtos\Tabelaprecos\Request\TprIncluirRequest;
use OmieLib\Produtos\Tabelaprecos\Request\TprItensListarRequest;
use OmieLib\Produtos\Tabelaprecos\Request\TprListarRequest;
use OmieLib\Produtos\Tabelaprecos\Request\TprSuspenderRequest;
use OmieLib\Produtos\Tabelaprecos\Response\TprAltPrecoItemResponse;
use OmieLib\Produtos\Tabelaprecos\Response\TprAlterarResponse;
use OmieLib\Produtos\Tabelaprecos\Response\TprAtivarResponse;
use OmieLib\Produtos\Tabelaprecos\Response\TprAtualizarResponse;
use OmieLib\Produtos\Tabelaprecos\Response\TprConsultarResponse;
use OmieLib\Produtos\Tabelaprecos\Response\TprExcluirResponse;
use OmieLib\Produtos\Tabelaprecos\Response\TprIncluirResponse;
use OmieLib\Produtos\Tabelaprecos\Response\TprItensListarResponse;
use OmieLib\Produtos\Tabelaprecos\Response\TprListarResponse;
use OmieLib\Produtos\Tabelaprecos\Response\TprSuspenderResponse;

/**
 * Dados dos filtros por produto.
 *
 * @pw_element string $cTodosProdutos Considerar todos os produtos nesta tabela de preços? (S/N)<BR>O padrão é "S".<BR>Quando informar "S", todos os demais campos deste grupo serão desconsiderados.<BR>Caso informe "N", pelo menos 1 dos campos deste grupo deverá ser informado.
 * @pw_element integer $nCodFamilia Código da Familia do Produto.<BR>(Interno, utilizado apenas na integração via API, não é exibido na tela).<BR>O conteúdo desse campo é o código interno da família gerado pelo Omie.<BR>
 * @pw_element string $cNCM Código do NCM.<BR>No formato 9999.99.99
 * @pw_element integer $nCodCaract Código da característica de produto.<BR>(Interno, utilizado apenas na integração via API, não é exibido na tela).<BR>O conteúdo desse campo é o código interno da característica do produto gerado pelo Omie.<BR>Será ignorado caso o campo "cTodosProdutos" estiver preenhido com "S".
 * @pw_element string $cConteudo Conteúdo da característica.<BR>Será ignorado caso o campo "cTodosProdutos" estiver preenhido com "S".
 * @pw_element integer $nCodFornec Código do fornecedor.<BR>(Interno, utilizado apenas na integração via API, não é exibido na tela).<BR>O conteúdo desse campo é o código interno do fornecedor gerado pelo Omie.<BR>Será ignorado caso o campo "cTodosProdutos" estiver preenhido com "S".
 * @pw_complex produtos
 */
class Produtos{
	/**
	 * Considerar todos os produtos nesta tabela de preços? (S/N)<BR>O padrão é "S".<BR>Quando informar "S", todos os demais campos deste grupo serão desconsiderados.<BR>Caso informe "N", pelo menos 1 dos campos deste grupo deverá ser informado.
	 *
	 * @var string
	 */
	public string $cTodosProdutos;
	/**
	 * Código da Familia do Produto.<BR>(Interno, utilizado apenas na integração via API, não é exibido na tela).<BR>O conteúdo desse campo é o código interno da família gerado pelo Omie.<BR>
	 *
	 * @var integer
	 */
	public int $nCodFamilia;
	/**
	 * Código do NCM.<BR>No formato 9999.99.99
	 *
	 * @var string
	 */
	public string $cNCM;
	/**
	 * Código da característica de produto.<BR>(Interno, utilizado apenas na integração via API, não é exibido na tela).<BR>O conteúdo desse campo é o código interno da característica do produto gerado pelo Omie.<BR>Será ignorado caso o campo "cTodosProdutos" estiver preenhido com "S".
	 *
	 * @var integer
	 */
	public int $nCodCaract;
	/**
	 * Conteúdo da característica.<BR>Será ignorado caso o campo "cTodosProdutos" estiver preenhido com "S".
	 *
	 * @var string
	 */
	public string $cConteudo;
	/**
	 * Código do fornecedor.<BR>(Interno, utilizado apenas na integração via API, não é exibido na tela).<BR>O conteúdo desse campo é o código interno do fornecedor gerado pelo Omie.<BR>Será ignorado caso o campo "cTodosProdutos" estiver preenhido com "S".
	 *
	 * @var integer
	 */
	public int $nCodFornec;
}
