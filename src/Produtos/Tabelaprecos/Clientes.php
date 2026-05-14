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
 * Dados dos filtros do cliente.
 *
 * @pw_element string $cTodosClientes Considerar todos os clientes nesta tabela de preços? (S/N)<BR>O padrão é "S".<BR>Quando informar "S", todos os demais campos deste grupo serão desconsiderados.<BR>Caso informe "N", pelo menos 1 dos campos deste grupo deverá ser informado.
 * @pw_element integer $nCodTag Considerar apenas os clientes de uma determinada Tag.<BR>Será ignorado caso o campo "cTodosClientes" estiver preenhido com "S".
 * @pw_element string $cTag Descrição da tag do cliente informada no campo nCodTag.<BR>O conteúdo deste campo é apenas informativo e não tem efeito na inclusão.<BR>Na inclusão utilize a tag "nCodTag".<BR>
 * @pw_element string $cUF Considerar apenas os clientes do Estado.<BR>Será ignorado caso o campo "cTodosClientes" estiver preenhido com "S".
 * @pw_complex clientes
 */
class Clientes{
	/**
	 * Considerar todos os clientes nesta tabela de preços? (S/N)<BR>O padrão é "S".<BR>Quando informar "S", todos os demais campos deste grupo serão desconsiderados.<BR>Caso informe "N", pelo menos 1 dos campos deste grupo deverá ser informado.
	 *
	 * @var string
	 */
	public string $cTodosClientes;
	/**
	 * Considerar apenas os clientes de uma determinada Tag.<BR>Será ignorado caso o campo "cTodosClientes" estiver preenhido com "S".
	 *
	 * @var integer
	 */
	public int $nCodTag;
	/**
	 * Descrição da tag do cliente informada no campo nCodTag.<BR>O conteúdo deste campo é apenas informativo e não tem efeito na inclusão.<BR>Na inclusão utilize a tag "nCodTag".<BR>
	 *
	 * @var string
	 */
	public string $cTag;
	/**
	 * Considerar apenas os clientes do Estado.<BR>Será ignorado caso o campo "cTodosClientes" estiver preenhido com "S".
	 *
	 * @var string
	 */
	public string $cUF;
}
