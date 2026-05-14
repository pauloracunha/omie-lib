<?php

namespace OmieLib\Produtos\Remessa;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Remessa\Request\RemessaDevolverRequest;
use OmieLib\Produtos\Remessa\Request\RemessaListarRequest;
use OmieLib\Produtos\Remessa\Request\RemessaStatusRequest;
use OmieLib\Produtos\Remessa\Response\RemessaDevolverResponse;
use OmieLib\Produtos\Remessa\Response\RemessaListarResponse;
use OmieLib\Produtos\Remessa\Response\RemessaStatusResponse;

/**
 * Cadastro de Remessa
 *
 * @pw_element cabec $cabec Cabeçalho da Remessa de Produtos
 * @pw_element frete $frete Dados do Frete para Remessa&nbsp;
 * @pw_element infAdic $infAdic Informações Adicionais da Remessa
 * @pw_element email $email Email para o Cliente (ou Destinatário)
 * @pw_element obs $obs Observações da Remessa
 * @pw_element produtosArray $produtos Itens da Remessa
 * @pw_element agropecuario $agropecuario Dados para atender NT 2024.003. Informações de Produtos da Agricultura, Pecuária e Produção Florestal
 * @pw_complex remessas
 */
class Remessas{
	/**
	 * Cabeçalho da Remessa de Produtos
	 *
	 * @var Cabec
	 */
	public Cabec $cabec;
	/**
	 * Dados do Frete para Remessa&nbsp;
	 *
	 * @var Frete
	 */
	public Frete $frete;
	/**
	 * Informações Adicionais da Remessa
	 *
	 * @var InfAdic
	 */
	public InfAdic $infAdic;
	/**
	 * Email para o Cliente (ou Destinatário)
	 *
	 * @var Email
	 */
	public Email $email;
	/**
	 * Observações da Remessa
	 *
	 * @var Obs
	 */
	public Obs $obs;
	/**
	 * Itens da Remessa
	 *
	 * @var Produtos[]
	 */
	public array $produtos;
	/**
	 * Dados para atender NT 2024.003. Informações de Produtos da Agricultura, Pecuária e Produção Florestal
	 *
	 * @var Agropecuario
	 */
	public Agropecuario $agropecuario;
}
