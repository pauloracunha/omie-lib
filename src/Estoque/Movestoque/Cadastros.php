<?php

namespace OmieLib\Estoque\Movestoque;

use OmieLib\Common\OmieFail;
use OmieLib\Estoque\Movestoque\Request\EpListarRequest;
use OmieLib\Estoque\Movestoque\Request\EpPrevisaoRequest;
use OmieLib\Estoque\Movestoque\Response\EpListarResponse;
use OmieLib\Estoque\Movestoque\Response\EpPrevisaoResponse;

/**
 * Lista os cadastros de produtos encontrados.
 *
 * @pw_element integer $nCodProd Código do produto.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element string $cCodIntProd Código de Integração do produto.<BR>(Utilizado em produtos criados via API, não é visualizado na tela)
 * @pw_element string $cCodigo Código do produto, conforme o fornecedor utiliza.
 * @pw_element string $cDescricao Descrição do produto.
 * @pw_element movimentosArray $movimentos Movimentos de entrada/saída do produto.
 * @pw_complex cadastros
 */
class Cadastros{
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
	 * Movimentos de entrada/saída do produto.
	 *
	 * @var Movimentos[]
	 */
	public array $movimentos;
}
