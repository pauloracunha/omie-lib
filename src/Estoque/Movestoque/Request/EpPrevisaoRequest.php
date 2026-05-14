<?php

namespace OmieLib\Estoque\Movestoque\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Estoque\Movestoque\Cadastros;
use OmieLib\Estoque\Movestoque\MovimentoEstoqueJsonClient;
use OmieLib\Estoque\Movestoque\Movimentos;
use OmieLib\Estoque\Movestoque\Response\EpListarResponse;
use OmieLib\Estoque\Movestoque\Response\EpPrevisaoResponse;

/**
 * Previsão de estoque do produto.
 *
 * @pw_element integer $nCodProd Código do produto.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element string $cCodIntProd Código de Integração do produto.<BR>(Utilizado em produtos criados via API, não é visualizado na tela)
 * @pw_element string $cCodigo Código do produto, conforme o fornecedor utiliza.
 * @pw_element string $dDtInicial Data inicial da pesquisa.
 * @pw_element string $dDtFinal Data final da pesquisa.
 * @pw_element integer $codigo_local_estoque Código do local do estoque.<BR><BR>Preenchimento opcional.<BR><BR>Se não informado pesquisará no local de estoque padrão.
 * @pw_complex epPrevisaoRequest
 */
class EpPrevisaoRequest{
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
	 * Data inicial da pesquisa.
	 *
	 * @var string
	 */
	public string $dDtInicial;
	/**
	 * Data final da pesquisa.
	 *
	 * @var string
	 */
	public string $dDtFinal;
	/**
	 * Código do local do estoque.<BR><BR>Preenchimento opcional.<BR><BR>Se não informado pesquisará no local de estoque padrão.
	 *
	 * @var integer
	 */
	public int $codigo_local_estoque;
}
