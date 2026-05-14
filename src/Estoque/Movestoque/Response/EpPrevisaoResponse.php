<?php

namespace OmieLib\Estoque\Movestoque\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Estoque\Movestoque\Cadastros;
use OmieLib\Estoque\Movestoque\MovimentoEstoqueJsonClient;
use OmieLib\Estoque\Movestoque\Movimentos;
use OmieLib\Estoque\Movestoque\Request\EpListarRequest;
use OmieLib\Estoque\Movestoque\Request\EpPrevisaoRequest;

/**
 * Previsão de estoque do produto.
 *
 * @pw_element integer $nCodProd Código do produto.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element string $cCodIntProd Código de Integração do produto.<BR>(Utilizado em produtos criados via API, não é visualizado na tela)
 * @pw_element string $cCodigo Código do produto, conforme o fornecedor utiliza.
 * @pw_element string $cDescricao Descrição do produto.
 * @pw_element decimal $nQtdePrevista Quantidade prevista de estoque.
 * @pw_element integer $codigo_local_estoque Código do local do estoque.<BR><BR>Preenchimento opcional.<BR><BR>Se não informado pesquisará no local de estoque padrão.
 * @pw_complex epPrevisaoResponse
 */
class EpPrevisaoResponse{
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
	/**
	 * Quantidade prevista de estoque.
	 *
	 * @var decimal
	 */
	public float $nQtdePrevista;
	/**
	 * Código do local do estoque.<BR><BR>Preenchimento opcional.<BR><BR>Se não informado pesquisará no local de estoque padrão.
	 *
	 * @var integer
	 */
	public int $codigo_local_estoque;
}
