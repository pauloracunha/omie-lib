<?php

namespace OmieLib\Estoque\Produtofornecedor;

use OmieLib\Common\OmieFail;
use OmieLib\Estoque\Produtofornecedor\Request\PfListarRequest;
use OmieLib\Estoque\Produtofornecedor\Response\PfListarResponse;

/**
 * Lista os cadastros encontrados.
 *
 * @pw_element integer $nCodForn Código do fornecedor.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element string $cCodIntForn Código de Integração do fornecedor.<BR>(Utilizado em fornecedores criados via API, não é visualizado na tela)
 * @pw_element string $cCpfCnpj CPF / CNPJ do fornecedor.
 * @pw_element string $cRazaoSocial Razão Social do fornecedor.
 * @pw_element string $cNomeFantasia Nome Fantasia do fornecedor.
 * @pw_element produtosArray $produtos Lista de produtos
 * @pw_complex cadastros
 */
class Cadastros{
	/**
	 * Código do fornecedor.<BR>(Gerado internamente, não é visualizado na tela)
	 *
	 * @var integer
	 */
	public int $nCodForn;
	/**
	 * Código de Integração do fornecedor.<BR>(Utilizado em fornecedores criados via API, não é visualizado na tela)
	 *
	 * @var string
	 */
	public string $cCodIntForn;
	/**
	 * CPF / CNPJ do fornecedor.
	 *
	 * @var string
	 */
	public string $cCpfCnpj;
	/**
	 * Razão Social do fornecedor.
	 *
	 * @var string
	 */
	public string $cRazaoSocial;
	/**
	 * Nome Fantasia do fornecedor.
	 *
	 * @var string
	 */
	public string $cNomeFantasia;
	/**
	 * Lista de produtos
	 *
	 * @var Produtos[]
	 */
	public array $produtos;
}
