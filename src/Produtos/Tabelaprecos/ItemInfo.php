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
 * Informações do cadastro do item.
 *
 * @pw_element string $dIncItem Data da Inclusão.<BR>No formato dd/mm/aaaa.
 * @pw_element string $hIncItem Hora da Inclusão.<BR>No formato hh:mm:ss.
 * @pw_element string $uIncItem Usuário da Inclusão.
 * @pw_element string $dAltItem Data da Alteração.<BR>No formato dd/mm/aaaa.
 * @pw_element string $hAltItem Hora da Alteração.<BR>No formato hh:mm:ss.
 * @pw_element string $uAltItem Usuário da Alteração.
 * @pw_element string $cImpAPIItem Importado pela API (S/N).
 * @pw_complex itemInfo
 */
class ItemInfo{
	/**
	 * Data da Inclusão.<BR>No formato dd/mm/aaaa.
	 *
	 * @var string
	 */
	public string $dIncItem;
	/**
	 * Hora da Inclusão.<BR>No formato hh:mm:ss.
	 *
	 * @var string
	 */
	public string $hIncItem;
	/**
	 * Usuário da Inclusão.
	 *
	 * @var string
	 */
	public string $uIncItem;
	/**
	 * Data da Alteração.<BR>No formato dd/mm/aaaa.
	 *
	 * @var string
	 */
	public string $dAltItem;
	/**
	 * Hora da Alteração.<BR>No formato hh:mm:ss.
	 *
	 * @var string
	 */
	public string $hAltItem;
	/**
	 * Usuário da Alteração.
	 *
	 * @var string
	 */
	public string $uAltItem;
	/**
	 * Importado pela API (S/N).
	 *
	 * @var string
	 */
	public string $cImpAPIItem;
}
